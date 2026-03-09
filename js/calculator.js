jQuery(document).ready(function ($) {
    'use strict';

    // ============ ХРАНИЛИЩЕ ТОВАРОВ ============

    let orderProducts = [];

    function loadOrderProducts() {
        try {
            const saved = localStorage.getItem('gl_order_products');
            if (saved) orderProducts = JSON.parse(saved);
        } catch (e) {
            orderProducts = [];
        }
    }

    function saveOrderProducts() {
        try {
            localStorage.setItem('gl_order_products', JSON.stringify(orderProducts));
        } catch (e) {
            console.warn('localStorage недоступен');
        }
    }

    // ============ ФОРМАТИРОВАНИЕ ЦЕНЫ ============

    function formatPrice(price) {
        if (!price || price === 0) return '0 ₽';
        return new Intl.NumberFormat('ru-RU', {
            style: 'decimal',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(price) + ' ₽';
    }

    // ============ КАЛЬКУЛЯТОР ============

    $('.product-calculator').each(function () {
        const $calc = $(this);

        // Элементы
        const $unitSelect    = $calc.find('.calc-unit-select');
        const $areaInput     = $calc.find('.calc-area-input');      // ввод в выбранных единицах
        const $qtyField      = $calc.find('.calc-quantity-field');  // расчётное кол-во (readonly)
        const $qtyInput      = $calc.find('.quantity-input');       // ручная корректировка
        const $qtyMinus      = $calc.find('.quantity-minus');
        const $qtyPlus       = $calc.find('.quantity-plus');
        const $totalPrice    = $calc.find('.calc-total-price');
        const $addToListBtn  = $calc.find('.calc-add-to-list');

        // Данные товара
        const productId           = parseInt($calc.data('product-id'));
        const productTitle        = $calc.data('product-title');
        const productPrice        = parseFloat($calc.data('price')) || 0;
        const productRegularPrice = parseFloat($calc.data('regular-price')) || 0;
        const productSalePrice    = parseFloat($calc.data('sale-price')) || 0;
        const isOnSale            = $calc.data('on-sale') == '1';
        const hasPrice            = $calc.data('has-price') == '1';

        // ---- Получить коэффициент выбранной единицы ----
        // coefficient = сколько базовых единиц в одной выбранной
        // Пример: 1 кор = 10 упак → coefficient = 10
        // Формула: qty_base = ceil(area_input * coefficient)
        // Обратно: area_input = qty_base / coefficient
        function getCoefficient() {
            return parseFloat($unitSelect.val()) || 1;
        }

        // ---- Рассчитать и обновить цену ----
        function updatePrice(qty) {
            if (hasPrice) {
                $totalPrice.text(formatPrice(qty * productPrice));
            } else {
                $totalPrice.text('Уточняйте');
            }
        }

        // ---- Сохранить текущее состояние ----
        function storeState(qty) {
            $calc.data('current-qty',   qty);
            $calc.data('current-price', hasPrice ? qty * productPrice : 0);
        }

        // ---- Пересчёт из поля ввода (area) → базовые единицы ----
        // Клиент вводит количество в выбранной единице (напр. 3 коробки)
        // qty_base = ceil(area * coefficient)
        function recalcFromArea() {
            const coeff = getCoefficient();
            const area  = parseFloat($areaInput.val()) || 0;
            const qty   = area > 0 ? Math.ceil(area * coeff) : 1;

            $qtyField.val(qty);
            $qtyInput.val(qty);

            updatePrice(qty);
            storeState(qty);
        }

        // ---- Пересчёт из ручного ввода количества → area ----
        function recalcFromQty(qty) {
            const coeff = getCoefficient();

            // Обратный пересчёт: сколько единиц выбранного типа нужно
            const area = qty / coeff;
            $areaInput.val(area % 1 === 0 ? area : parseFloat(area.toFixed(2)));

            // Синхронизируем расчётное поле
            $qtyField.val(qty);

            updatePrice(qty);
            storeState(qty);
        }

        // ============ СОБЫТИЯ ============

        // Смена единицы → пересчёт из area
        $unitSelect.on('change', function () {
            recalcFromArea();
        });

        // Ввод в поле area
        $areaInput.on('input', function () {
            const val = parseFloat($(this).val());
            if (isNaN(val) || val < 0) $(this).val(0);
            recalcFromArea();
        });

        // Кнопка −
        $qtyMinus.on('click', function (e) {
            e.preventDefault();
            const val = parseInt($qtyInput.val()) || 1;
            if (val > 1) recalcFromQty(val - 1);
        });

        // Кнопка +
        $qtyPlus.on('click', function (e) {
            e.preventDefault();
            const val = parseInt($qtyInput.val()) || 1;
            recalcFromQty(val + 1);
        });

        // Прямой ввод количества
        $qtyInput.on('input', function () {
            let val = parseInt($(this).val());
            if (isNaN(val) || val < 1) {
                val = 1;
                $(this).val(1);
            }
            recalcFromQty(val);
        });

        // ============ ДОБАВЛЕНИЕ В СПИСОК ============

        $addToListBtn.on('click', function (e) {
            e.preventDefault();

            const unitName   = $unitSelect.find('option:selected').data('name');
            const totalQty   = $calc.data('current-qty')   || 1;
            const totalPrice = $calc.data('current-price') || 0;

            const product = {
                id:           productId,
                title:        productTitle,
                unitName:     unitName,
                quantity:     totalQty,
                price:        productPrice,
                regularPrice: productRegularPrice,
                salePrice:    productSalePrice,
                isOnSale:     isOnSale,
                hasPrice:     hasPrice,
                totalPrice:   totalPrice,
            };

            // Если товар с такой единицей уже есть — обновляем, иначе добавляем
            const existingIndex = orderProducts.findIndex(
                p => p.id === productId && p.unitName === unitName
            );

            if (existingIndex !== -1) {
                orderProducts[existingIndex] = product;
            } else {
                orderProducts.push(product);
            }

            saveOrderProducts();
            updateOrderModal();

            $('#orderModal').modal('show');
        });

        // Первоначальный расчёт
        recalcFromArea();
    });

    // ============ МОДАЛЬНОЕ ОКНО ============

    function updateOrderModal() {
        const $modalQuantity      = $('#modalProductQuantity');
        const $modalPrice         = $('#modalProductPrice');
        const $modalOldPrice      = $('#modalProductOldPrice');
        const $hiddenQuantity     = $('#hiddenProductQuantity');
        const $hiddenPrice        = $('#hiddenProductPrice');
        const $hiddenProductsData = $('#orderProductsData');

        if (orderProducts.length === 0) {
            if ($modalQuantity.length)      $modalQuantity.text('1');
            if ($modalPrice.length)         $modalPrice.text('0 ₽');
            if ($hiddenQuantity.length)     $hiddenQuantity.val('1');
            if ($hiddenPrice.length)        $hiddenPrice.val('0');
            if ($hiddenProductsData.length) $hiddenProductsData.val('[]');
            return;
        }

        const last = orderProducts[orderProducts.length - 1];

        if ($modalQuantity.length) $modalQuantity.text(last.quantity);

        if (last.hasPrice) {
            if (last.isOnSale) {
                if ($modalOldPrice.length) $modalOldPrice.text(formatPrice(last.regularPrice * last.quantity));
                if ($modalPrice.length)    $modalPrice.text(formatPrice(last.totalPrice));
            } else {
                if ($modalOldPrice.length) $modalOldPrice.text('');
                if ($modalPrice.length)    $modalPrice.text(formatPrice(last.totalPrice));
            }
        } else {
            if ($modalPrice.length) $modalPrice.text('Уточняйте');
        }

        if ($hiddenQuantity.length)     $hiddenQuantity.val(last.quantity);
        if ($hiddenPrice.length)        $hiddenPrice.val(last.totalPrice);
        if ($hiddenProductsData.length) $hiddenProductsData.val(JSON.stringify(orderProducts));
    }

    // Очистка списка
    $(document).on('click', '.clear-order-products', function () {
        orderProducts = [];
        saveOrderProducts();
        updateOrderModal();
    });

    // Очистка после отправки формы
    $('#orderForm').on('submit', function () {
        setTimeout(function () {
            orderProducts = [];
            saveOrderProducts();
        }, 500);
    });

    // ============ ИНИЦИАЛИЗАЦИЯ ============

    loadOrderProducts();

    $('#orderModal').on('show.bs.modal', function () {
        updateOrderModal();
    });
});