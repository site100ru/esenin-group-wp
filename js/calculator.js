jQuery(document).ready(function($) {
	'use strict';

	// ============ ХРАНИЛИЩЕ ТОВАРОВ ============
	let orderProducts = [];

	// Загрузка из localStorage
	function loadOrderProducts() {
		const saved = localStorage.getItem('gl_order_products');
		if (saved) {
			try {
				orderProducts = JSON.parse(saved);
			} catch (e) {
				orderProducts = [];
			}
		}
	}

	// Сохранение в localStorage
	function saveOrderProducts() {
		localStorage.setItem('gl_order_products', JSON.stringify(orderProducts));
	}

	// ============ КАЛЬКУЛЯТОР ============
	$('.product-calculator').each(function() {
		const $calc = $(this);
		
		// Элементы управления
		const $unitSelect = $calc.find('.calc-unit-select');
		const $areaInput = $calc.find('.calc-area-input');
		const $quantityField = $calc.find('.calc-quantity-field');
		const $quantityInput = $calc.find('.quantity-input');
		const $quantityMinus = $calc.find('.quantity-minus');
		const $quantityPlus = $calc.find('.quantity-plus');
		const $totalPrice = $calc.find('.calc-total-price');
		const $addToListBtn = $calc.find('.calc-add-to-list');
		
		// Данные товара
		const productId = parseInt($calc.data('product-id'));
		const productTitle = $calc.data('product-title');
		const productPrice = parseFloat($calc.data('price')) || 0;
		const productRegularPrice = parseFloat($calc.data('regular-price')) || 0;
		const productSalePrice = parseFloat($calc.data('sale-price')) || 0;
		const isOnSale = $calc.data('on-sale') === 1;
		const hasPrice = $calc.data('has-price') === 1;
		const baseUnit = $calc.data('base-unit') || 'шт';

		// ============ РАСЧЁТЫ ============
		
		// Главная функция пересчёта
		function recalculate() {
			const coefficient = parseFloat($unitSelect.val()) || 1;
			const area = parseFloat($areaInput.val()) || 0;
			
			// Рассчитываем количество в базовых единицах из площади
			let calculatedQty = area * coefficient;
			
			// Округляем до целого
			calculatedQty = Math.ceil(calculatedQty);
			
			// Обновляем ОБА поля количества синхронно
			$quantityField.val(calculatedQty);
			$quantityInput.val(calculatedQty);
			
			// Рассчитываем стоимость
			if (hasPrice) {
				const totalCost = calculatedQty * productPrice;
				$totalPrice.text(formatPrice(totalCost));
			} else {
				$totalPrice.text('0 ₽');
			}
			
			// Сохраняем для добавления в корзину
			$calc.data('current-total-qty', calculatedQty);
			$calc.data('current-total-price', hasPrice ? calculatedQty * productPrice : 0);
		}

		// Форматирование цены
		function formatPrice(price) {
			if (!price || price === 0) return '0 ₽';
			
			return new Intl.NumberFormat('ru-RU', {
				style: 'decimal',
				minimumFractionDigits: 0,
				maximumFractionDigits: 0
			}).format(price) + ' ₽';
		}

		// ============ СОБЫТИЯ ============
		
		// Изменение единицы измерения
		$unitSelect.on('change', function() {
			recalculate();
		});

		// Изменение объёма/площади
		$areaInput.on('input', function() {
			if (parseFloat($(this).val()) < 0) {
				$(this).val(0);
			}
			recalculate();
		});

		// Кнопка "-"
		$quantityMinus.on('click', function(e) {
			e.preventDefault();
			let val = parseInt($quantityInput.val()) || 1;
			if (val > 1) {
				const newVal = val - 1;
				$quantityInput.val(newVal);
				$quantityField.val(newVal);
				
				// Пересчитываем площадь обратно
				const coefficient = parseFloat($unitSelect.val()) || 1;
				if (coefficient > 0) {
					$areaInput.val((newVal / coefficient).toFixed(2));
				}
				
				recalculate();
			}
		});

		// Кнопка "+"
		$quantityPlus.on('click', function(e) {
			e.preventDefault();
			let val = parseInt($quantityInput.val()) || 1;
			const newVal = val + 1;
			$quantityInput.val(newVal);
			$quantityField.val(newVal);
			
			// Пересчитываем площадь обратно
			const coefficient = parseFloat($unitSelect.val()) || 1;
			if (coefficient > 0) {
				$areaInput.val((newVal / coefficient).toFixed(2));
			}
			
			recalculate();
		});

		// Прямое изменение количества
		$quantityInput.on('input', function() {
			let val = parseInt($(this).val());
			if (isNaN(val) || val < 1) {
				val = 1;
				$(this).val(1);
			}
			
			$quantityField.val(val);
			
			// Пересчитываем площадь обратно
			const coefficient = parseFloat($unitSelect.val()) || 1;
			if (coefficient > 0) {
				$areaInput.val((val / coefficient).toFixed(2));
			}
			
			recalculate();
		});

		// ============ ДОБАВЛЕНИЕ В СПИСОК ============
		
		$addToListBtn.on('click', function(e) {
			e.preventDefault();
			
			const unitName = $unitSelect.find('option:selected').data('name');
			const totalQty = $calc.data('current-total-qty') || 1;
			const totalPrice = $calc.data('current-total-price') || 0;
			const area = parseFloat($areaInput.val()) || 0;
			const coefficient = parseFloat($unitSelect.val()) || 1;

			const product = {
				id: productId,
				title: productTitle,
				unitName: unitName,
				quantity: totalQty,
				price: productPrice,
				regularPrice: productRegularPrice,
				salePrice: productSalePrice,
				isOnSale: isOnSale,
				hasPrice: hasPrice,
				totalPrice: totalPrice
			};

			// Проверяем, есть ли уже такой товар
			const existingIndex = orderProducts.findIndex(p => 
				p.id === productId && p.unitName === unitName
			);

			if (existingIndex !== -1) {
				orderProducts[existingIndex] = product;
			} else {
				orderProducts.push(product);
			}

			saveOrderProducts();
			updateOrderModal();
			
			// Открываем модальное окно
			$('#orderModal').modal('show');
		});

		// Первоначальный расчёт
		recalculate();
	});

	// ============ МОДАЛЬНОЕ ОКНО ============
	
	function updateOrderModal() {
		const $modalQuantity = $('#modalProductQuantity');
		const $modalPrice = $('#modalProductPrice');
		const $modalOldPrice = $('#modalProductOldPrice');
		const $hiddenQuantity = $('#hiddenProductQuantity');
		const $hiddenPrice = $('#hiddenProductPrice');
		const $hiddenProductsData = $('#orderProductsData');
		
		if (orderProducts.length === 0) {
			// Если товаров нет, показываем значения по умолчанию
			if ($modalQuantity.length) $modalQuantity.text('1');
			if ($modalPrice.length) $modalPrice.text('0 ₽');
			if ($hiddenQuantity.length) $hiddenQuantity.val('1');
			if ($hiddenPrice.length) $hiddenPrice.val('0');
			if ($hiddenProductsData.length) $hiddenProductsData.val('[]');
			return;
		}

		// Берём последний добавленный товар для отображения
		const lastProduct = orderProducts[orderProducts.length - 1];
		
		if ($modalQuantity.length) {
			$modalQuantity.text(lastProduct.quantity);
		}
		
		if (lastProduct.hasPrice) {
			if (lastProduct.isOnSale) {
				if ($modalOldPrice.length) {
					$modalOldPrice.text(formatPrice(lastProduct.regularPrice * lastProduct.quantity));
				}
				if ($modalPrice.length) {
					$modalPrice.text(formatPrice(lastProduct.totalPrice));
				}
			} else {
				if ($modalPrice.length) {
					$modalPrice.text(formatPrice(lastProduct.totalPrice));
				}
			}
		} else {
			if ($modalPrice.length) {
				$modalPrice.text('Уточняйте');
			}
		}
		
		if ($hiddenQuantity.length) {
			$hiddenQuantity.val(lastProduct.quantity);
		}
		if ($hiddenPrice.length) {
			$hiddenPrice.val(lastProduct.totalPrice);
		}
		
		// Сохраняем все товары в скрытое поле
		if ($hiddenProductsData.length) {
			$hiddenProductsData.val(JSON.stringify(orderProducts));
		}
	}

	// Удаление всех товаров (по кнопке очистки, если добавите)
	$(document).on('click', '.clear-order-products', function() {
		orderProducts = [];
		saveOrderProducts();
		updateOrderModal();
	});

	// Очистка после отправки формы
	$('#orderForm').on('submit', function() {
		setTimeout(function() {
			orderProducts = [];
			saveOrderProducts();
		}, 500);
	});

	// ============ ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ ============
	
	function formatPrice(price) {
		if (!price || price === 0) return '0 ₽';
		
		return new Intl.NumberFormat('ru-RU', {
			style: 'decimal',
			minimumFractionDigits: 0,
			maximumFractionDigits: 0
		}).format(price) + ' ₽';
	}

	// ============ ИНИЦИАЛИЗАЦИЯ ============
	
	loadOrderProducts();

	// Обновляем модалку при открытии
	$('#orderModal').on('show.bs.modal', function() {
		updateOrderModal();
	});
});