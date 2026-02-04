/**
 * Функции для страницы товара
 */

// Открытие модальной галереи
function galleryOn(galleryId) {
    const galleryWrapper = document.getElementById('galleryWrapper');
    const gallery = document.getElementById('gallery-product-modal');
    
    if (galleryWrapper && gallery) {
        galleryWrapper.style.display = 'block';
        gallery.style.display = 'block';
    }
}

// Закрытие модальной галереи
function closeGallery() {
    const galleryWrapper = document.getElementById('galleryWrapper');
    const gallery = document.getElementById('gallery-product-modal');
    
    if (galleryWrapper && gallery) {
        galleryWrapper.style.display = 'none';
        gallery.style.display = 'none';
    }
}

// Калькулятор товара (базовая реализация)
document.addEventListener('DOMContentLoaded', function() {
    
    // Кнопки количества в калькуляторе
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    
    quantityBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.parentElement.querySelector('.quantity-input');
            let value = parseInt(input.value) || 1;
            
            if (this.textContent === '+') {
                value++;
            } else if (this.textContent === '−' && value > 1) {
                value--;
            }
            
            input.value = value;
            
            // Здесь можно добавить пересчет стоимости
            // updateCalculatorTotal();
        });
    });
    
    // Синхронизация данных с модальным окном при открытии
    const orderModal = document.getElementById('orderModal');
    if (orderModal) {
        orderModal.addEventListener('show.bs.modal', function() {
            const quantity = document.querySelector('.quantity-input')?.value || 1;
            const quantitySpan = document.getElementById('modalProductQuantity');
            const quantityInput = document.getElementById('hiddenProductQuantity');
            
            if (quantitySpan) quantitySpan.textContent = quantity;
            if (quantityInput) quantityInput.value = quantity;
        });
    }
    
    // Закрытие галереи по клику вне изображения
    const galleryWrapper = document.getElementById('galleryWrapper');
    if (galleryWrapper) {
        galleryWrapper.addEventListener('click', function(e) {
            if (e.target === this) {
                closeGallery();
            }
        });
    }
    
    // Закрытие галереи по ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeGallery();
        }
    });
});