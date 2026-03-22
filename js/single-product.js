/**
 * Функции для страницы товара
 * Калькулятор: area-input → базовые единицы → цена
 */

// ============ ГАЛЕРЕЯ ============

function galleryOn(galleryId) {
    const galleryWrapper = document.getElementById('galleryWrapper');
    const gallery = document.getElementById('gallery-product-modal');
    if (galleryWrapper && gallery) {
        galleryWrapper.style.display = 'block';
        gallery.style.display = 'block';
    }
}

function closeGallery() {
    const galleryWrapper = document.getElementById('galleryWrapper');
    const gallery = document.getElementById('gallery-product-modal');
    if (galleryWrapper && gallery) {
        galleryWrapper.style.display = 'none';
        gallery.style.display = 'none';
    }
}

// ============ УТИЛИТЫ ============

function formatPrice(price) {
    if (!price || price === 0) return '0 ₽';
    return new Intl.NumberFormat('ru-RU', {
        style: 'decimal',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    }).format(price) + ' ₽';
}

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

// ============ КАЛЬКУЛЯТОР ============

function initCalculators() {
    document.querySelectorAll('.product-calculator').forEach(function (calc) {

        // DOM-элементы
        const unitSelect = calc.querySelector('.calc-unit-select');
        const areaInput = calc.querySelector('.calc-area-input');       // ввод в выбранных единицах
        const qtyField = calc.querySelector('.calc-quantity-field');   // расчётное кол-во (readonly)
        const qtyInput = calc.querySelector('.quantity-input');        // ручная корректировка
        const qtyMinus = calc.querySelector('.quantity-minus');
        const qtyPlus = calc.querySelector('.quantity-plus');
        const totalPrice = calc.querySelector('.calc-total-price');
        const addToList = calc.querySelector('.calc-add-to-list');

        if (!unitSelect || !areaInput || !qtyField || !qtyInput) return;

        // Данные товара из data-атрибутов
        const productId = parseInt(calc.dataset.productId) || 0;
        const productTitle = calc.dataset.productTitle || '';
        const productPrice = parseFloat(calc.dataset.price) || 0;
        const productRegularPrice = parseFloat(calc.dataset.regularPrice) || 0;
        const productSalePrice = parseFloat(calc.dataset.salePrice) || 0;
        const isOnSale = calc.dataset.onSale === '1';
        const hasPrice = calc.dataset.hasPrice === '1';

        // Внутреннее состояние
        let currentQty = 1;
        let currentTotal = hasPrice ? productPrice : 0;

        // --- Коэффициент выбранной единицы ---
        function getCoefficient() {
            return parseFloat(unitSelect.value) || 1;
        }

        // --- Обновить отображение цены ---
        function renderPrice(qty) {
            if (!totalPrice) return;
            totalPrice.textContent = hasPrice
                ? formatPrice(qty * productPrice)
                : 'Уточняйте';
        }

        // --- Пересчёт: area + единица → количество ---
        // qty_base = ceil(area × coefficient)
        function recalcFromArea() {
            const coeff = getCoefficient();
            const area = parseFloat(areaInput.value) || 0;
            // Сколько упаковок/коробок нужно купить
            const qty = area > 0 ? Math.ceil(area / coeff) : 1;

            currentQty = qty;
            currentTotal = hasPrice ? qty * productPrice : 0;

            qtyField.value = qty;
            qtyInput.value = qty;

            renderPrice(qty);
        }

        // --- Пересчёт: ручной ввод количества → area ---
        function recalcFromQty(qty) {
            qty = Math.max(1, Math.round(qty));
            const coeff = getCoefficient();

            currentQty = qty;
            currentTotal = hasPrice ? qty * productPrice : 0;

            // Сколько штук содержится в qty упаковках
            areaInput.value = qty * coeff;
            qtyField.value = qty;
            qtyInput.value = qty;

            renderPrice(qty);
        }

        // ============ СОБЫТИЯ ============

        // Смена единицы → пересчёт из area
        unitSelect.addEventListener('change', function () {
            recalcFromArea();
        });

        // Ввод в поле area
        areaInput.addEventListener('input', function () {
            const val = parseFloat(this.value);
            if (isNaN(val) || val < 0) this.value = 0;
            recalcFromArea();
        });

        // Кнопка «−»
        if (qtyMinus) {
            qtyMinus.addEventListener('click', function (e) {
                e.preventDefault();
                const val = parseInt(qtyInput.value) || 1;
                if (val > 1) recalcFromQty(val - 1);
            });
        }

        // Кнопка «+»
        if (qtyPlus) {
            qtyPlus.addEventListener('click', function (e) {
                e.preventDefault();
                const val = parseInt(qtyInput.value) || 1;
                recalcFromQty(val + 1);
            });
        }

        // Прямой ввод количества
        qtyInput.addEventListener('input', function () {
            let val = parseInt(this.value);
            if (isNaN(val) || val < 1) {
                val = 1;
                this.value = 1;
            }
            recalcFromQty(val);
        });

        // ============ ДОБАВЛЕНИЕ В СПИСОК ============

        if (addToList) {
            addToList.addEventListener('click', function (e) {
                e.preventDefault();

                const selectedOption = unitSelect.options[unitSelect.selectedIndex];
                const unitName = selectedOption ? selectedOption.dataset.name : 'шт';

                const product = {
                    id: productId,
                    title: productTitle,
                    unitName: unitName,
                    quantity: currentQty,
                    price: productPrice,
                    regularPrice: productRegularPrice,
                    salePrice: productSalePrice,
                    isOnSale: isOnSale,
                    hasPrice: hasPrice,
                    totalPrice: currentTotal,
                };

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
            });
        }

        // Первоначальный расчёт
        recalcFromArea();
    });
}

// ============ МОДАЛЬНОЕ ОКНО ============

function updateOrderModal() {
    const modalQuantity = document.getElementById('modalProductQuantity');
    const modalPrice = document.getElementById('modalProductPrice');
    const modalOldPrice = document.getElementById('modalProductOldPrice');
    const hiddenQuantity = document.getElementById('hiddenProductQuantity');
    const hiddenPrice = document.getElementById('hiddenProductPrice');
    const hiddenProductsData = document.getElementById('orderProductsData');

    if (orderProducts.length === 0) {
        if (modalQuantity) modalQuantity.textContent = '1';
        if (modalPrice) modalPrice.textContent = '0 ₽';
        if (hiddenQuantity) hiddenQuantity.value = '1';
        if (hiddenPrice) hiddenPrice.value = '0';
        if (hiddenProductsData) hiddenProductsData.value = '[]';
        return;
    }

    const last = orderProducts[orderProducts.length - 1];

    if (modalQuantity) modalQuantity.textContent = last.quantity;

    if (last.hasPrice) {
        if (last.isOnSale) {
            if (modalOldPrice) modalOldPrice.textContent = formatPrice(last.regularPrice * last.quantity);
            if (modalPrice) modalPrice.textContent = formatPrice(last.totalPrice);
        } else {
            if (modalOldPrice) modalOldPrice.textContent = '';
            if (modalPrice) modalPrice.textContent = formatPrice(last.totalPrice);
        }
    } else {
        if (modalPrice) modalPrice.textContent = 'Уточняйте';
    }

    if (hiddenQuantity) hiddenQuantity.value = last.quantity;
    if (hiddenPrice) hiddenPrice.value = last.totalPrice;
    if (hiddenProductsData) hiddenProductsData.value = JSON.stringify(orderProducts);
}

// ============ ИНИЦИАЛИЗАЦИЯ ============

document.addEventListener('DOMContentLoaded', function () {

    loadOrderProducts();
    initCalculators();

    // Синхронизация модального окна при открытии
    const orderModal = document.getElementById('orderModal');
    if (orderModal) {
        orderModal.addEventListener('show.bs.modal', function () {
            updateOrderModal();
        });
    }

    // Очистка списка
    document.addEventListener('click', function (e) {
        if (e.target && e.target.classList.contains('clear-order-products')) {
            orderProducts = [];
            saveOrderProducts();
            updateOrderModal();
        }
    });

    // Очистка после отправки формы
    const orderForm = document.getElementById('orderForm');
    if (orderForm) {
        orderForm.addEventListener('submit', function () {
            setTimeout(function () {
                orderProducts = [];
                saveOrderProducts();
            }, 500);
        });
    }

    // Закрытие галереи кликом вне изображения
    const galleryWrapper = document.getElementById('galleryWrapper');
    if (galleryWrapper) {
        galleryWrapper.addEventListener('click', function (e) {
            if (e.target === this) closeGallery();
        });
    }

    // Закрытие галереи по ESC
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeGallery();
    });
});