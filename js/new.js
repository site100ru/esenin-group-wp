// Функция открытия галереи
function galleryOn(galleryId) {
    const galleryWrapper = document.getElementById('galleryWrapper');
    const prevBtn = document.querySelector('#gallery-product-modal .carousel-control-prev');
    const nextBtn = document.querySelector('#gallery-product-modal .carousel-control-next');

    // Получаем количество изображений на странице
    const carouselItems = document.querySelectorAll('#carousel-product .carousel-item').length;

    // Показываем/скрываем кнопки навигации
    if (carouselItems > 1) {
        prevBtn.style.display = 'flex';
        nextBtn.style.display = 'flex';
    } else {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
    }

    // Показываем галерею
    galleryWrapper.style.display = 'block';
}

// Функция закрытия галереи
function closeGallery() {
    document.getElementById('galleryWrapper').style.display = 'none';
}

// Закрытие по Escape
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeGallery();
    }
});

// Калькулятор - автоматический расчет
function autoCalculate() {
    const areaInput = document.getElementById('area');
    const quantityInput = document.querySelector('.quantity-input');
    const quantityField = document.getElementById('quantity-field');
    const resultValue = document.querySelector('.calculator-result-value');
    
    // Проверяем наличие элементов
    if (!areaInput || !quantityInput) return;
    
    const area = parseFloat(areaInput.value) || 0;
    const quantity = parseInt(quantityInput.value) || 0;

    const pricePerUnit = 600;
    const oldPricePerUnit = 720;
    const areaPerPackage = 3; // площадь в одной упаковке

    // Расчет количества упаковок на основе площади
    const calculatedQuantity = Math.ceil(area / areaPerPackage);

    // Обновляем оба поля количества
    if (quantityField) quantityField.value = calculatedQuantity;
    if (quantityInput) quantityInput.value = calculatedQuantity;

    // Расчет стоимости
    let totalPrice = calculatedQuantity * areaPerPackage * pricePerUnit;
    let totalOldPrice = calculatedQuantity * areaPerPackage * oldPricePerUnit;

    // Обновляем стоимость
    if (resultValue) {
        resultValue.textContent = Math.round(totalPrice).toLocaleString('ru-RU');
    }

    // Обновляем модальное окно
    const modalQuantity = document.getElementById('modalProductQuantity');
    const modalPrice = document.getElementById('modalProductPrice');
    const modalOldPrice = document.getElementById('modalProductOldPrice');
    const hiddenQuantity = document.getElementById('hiddenProductQuantity');
    const hiddenPrice = document.getElementById('hiddenProductPrice');
    
    if (modalQuantity) modalQuantity.textContent = calculatedQuantity;
    if (modalPrice) modalPrice.textContent = Math.round(totalPrice).toLocaleString('ru-RU') + ' ₽';
    if (modalOldPrice) modalOldPrice.textContent = Math.round(totalOldPrice).toLocaleString('ru-RU') + ' ₽';
    if (hiddenQuantity) hiddenQuantity.value = calculatedQuantity;
    if (hiddenPrice) hiddenPrice.value = Math.round(totalPrice);
}

// Пересчет при изменении площади
const areaInput = document.getElementById('area');
if (areaInput) {
    areaInput.addEventListener('input', autoCalculate);
}

// Пересчет при изменении количества кнопками +/-
document.querySelectorAll('.quantity-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
        const input = this.parentElement.querySelector('.quantity-input');
        if (!input) return;
        
        let value = parseInt(input.value);

        if (this.textContent === '+') {
            input.value = value + 1;
        } else if (this.textContent === '−' && value > 1) {
            input.value = value - 1;
        }

        // Пересчитываем площадь на основе нового количества
        const newQuantity = parseInt(input.value);
        const areaPerPackage = 3;
        const areaField = document.getElementById('area');
        if (areaField) {
            areaField.value = newQuantity * areaPerPackage;
        }

        autoCalculate();
    });
});

// Пересчет при прямом изменении количества в нижнем поле
const quantityInput = document.querySelector('.quantity-input');
if (quantityInput) {
    quantityInput.addEventListener('input', function () {
        const newQuantity = parseInt(this.value) || 0;
        const areaPerPackage = 3;
        const areaField = document.getElementById('area');
        if (areaField) {
            areaField.value = newQuantity * areaPerPackage;
        }

        autoCalculate();
    });
}

// Пересчет при открытии модального окна
const orderModalBtn = document.querySelector('[data-bs-target="#orderModal"]');
if (orderModalBtn) {
    orderModalBtn.addEventListener('click', function () {
        autoCalculate();
    });
}

// Начальный расчет при загрузке страницы
autoCalculate();

// Логика прилипающего меню при скролле
function prilipalo() {
    var headerNavBottom = document.querySelector('.header-nav-bottom');
    var headerNavTop = document.querySelector('.header-nav-top');
    
    if (!headerNavBottom) return;
    
    // Функция для установки фиксированного положения на мобильных
    function setMobileFixed() {
        var screenWidth = window.innerWidth;
        
        if (screenWidth < 992) {
            var menuHeight = headerNavBottom.offsetHeight;
            headerNavBottom.classList.add('fixed-top');
            headerNavBottom.style.position = 'fixed';
            headerNavBottom.style.top = '0';
            document.body.style.paddingTop = menuHeight + 'px';
        }
    }
    
    // Функция для проверки и установки фиксированного положения на десктопе
    function checkDesktopPosition() {
        var screenWidth = window.innerWidth;
        var prokrutka = window.pageYOffset;
        
        if (screenWidth >= 992) {
            var topMenuHeight = headerNavTop ? headerNavTop.offsetHeight : 57;
            
            if (prokrutka > topMenuHeight) {
                var menuHeight = headerNavBottom.offsetHeight;
                headerNavBottom.classList.add('fixed-top');
                headerNavBottom.style.position = 'fixed';
                headerNavBottom.style.top = '0';
                document.body.style.paddingTop = menuHeight + 'px';
            }
        }
    }
    
    // Применяем стили сразу при загрузке
    setMobileFixed();
    checkDesktopPosition();
    
    // Обработчик скролла
    window.addEventListener('scroll', function() {
        var prokrutka = window.pageYOffset;
        var screenWidth = window.innerWidth;

        if (screenWidth >= 992) {
            // Для десктопа
            var topMenuHeight = headerNavTop ? headerNavTop.offsetHeight : 57;
            
            if (prokrutka > topMenuHeight) {
                var menuHeight = headerNavBottom.offsetHeight;
                
                headerNavBottom.classList.add('fixed-top');
                headerNavBottom.style.position = 'fixed';
                headerNavBottom.style.top = '0';
                
                document.body.style.paddingTop = menuHeight + 'px';
            } else {
                headerNavBottom.classList.remove('fixed-top');
                headerNavBottom.style.position = 'static';
                headerNavBottom.style.top = '';
                
                document.body.style.paddingTop = '0';
            }
        }
    });
    
    // Обработчик изменения размера окна
    window.addEventListener('resize', function() {
        var screenWidth = window.innerWidth;
        
        if (screenWidth < 992) {
            setMobileFixed();
        } else {
            // Сброс при переходе на десктоп
            headerNavBottom.classList.remove('fixed-top');
            headerNavBottom.style.position = 'static';
            headerNavBottom.style.top = '';
            document.body.style.paddingTop = '0';
            // Проверяем позицию после сброса
            checkDesktopPosition();
        }
    });
}

// Вызываем функцию после загрузки DOM
document.addEventListener('DOMContentLoaded', prilipalo);

