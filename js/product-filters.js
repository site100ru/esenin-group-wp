jQuery(document).ready(function($) {
    'use strict';

    // Переменные для dropdown'ов
    const $filtersButton = $('.filters-button');
    const $filtersContent = $('.filters-dropdown-content');
    const $sortingButton = $('.sorting-button');
    const $sortingContent = $('.sorting-dropdown-content');


    // Открытие/закрытие dropdown фильтров
    $filtersButton.on('click', function(e) {
        e.stopPropagation();
        $filtersContent.toggleClass('show');
        $sortingContent.removeClass('show');
    });

    // Открытие/закрытие dropdown сортировки
    $sortingButton.on('click', function(e) {
        e.stopPropagation();
        $sortingContent.toggleClass('show');
        $filtersContent.removeClass('show');
    });

    // Закрытие dropdown при клике вне
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.filters-dropdown').length) {
            $filtersContent.removeClass('show');
        }
        if (!$(e.target).closest('.sorting-dropdown').length) {
            $sortingContent.removeClass('show');
        }
    });

    // Функция для получения всех параметров фильтра
    function getFilterParams() {
        const params = new URLSearchParams();
        
        // Получаем все чекбоксы фильтров
        $('.filter-checkbox:checked').each(function() {
            const name = $(this).attr('name');
            const value = $(this).val();
            
            if (name.endsWith('[]')) {
                const baseName = name.replace('[]', '');
                // Добавляем [] обратно для правильной передачи в PHP
                params.append(baseName + '[]', value);
            } else {
                params.set(name, value);
            }
        });

        // Добавляем сортировку
        const currentSort = $('.sorting-option.selected').data('sort');
        if (currentSort) {
            params.set('orderby', currentSort);
        }

        // Добавляем текущую категорию если есть
        const bodyClass = $('body').attr('class');
        if (bodyClass) {
            const categoryMatch = bodyClass.match(/term-(\d+)/);
            if (categoryMatch) {
                params.set('category', categoryMatch[1]);
            }
        }

        return params;
    }

    // Функция загрузки товаров через AJAX
    function loadProducts(updateURL = true) {
        const params = getFilterParams();

        // Показываем лоадер
        $('#products-container').fadeTo(300, 0.3);
        $('#products-loader').show();

        $.ajax({
            url: wc_ajax_params.ajax_url,
            type: 'GET',
            data: {
                action: 'filter_products',
                params: params.toString()
            },
            success: function(response) {
                if (response.success) {
                    // Обновляем контейнер с товарами
                    $('#products-container').html(response.data.html);
                    
                    // Обновляем URL если нужно
                    if (updateURL && window.history.pushState) {
                        const newURL = window.location.pathname + '?' + params.toString();
                        window.history.pushState({}, '', newURL);
                    }

                    // Скроллим к началу товаров
                    $('html, body').animate({
                        scrollTop: $('.products-section').offset().top - 100
                    }, 500);
                } else {
                    console.error('Ошибка загрузки товаров');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('Произошла ошибка при загрузке товаров. Попробуйте еще раз.');
            },
            complete: function() {
                // Скрываем лоадер
                $('#products-loader').hide();
                $('#products-container').fadeTo(300, 1);
            }
        });
    }

    // Применение фильтров
    $('.apply-filters-btn').on('click', function() {
        loadProducts();
        $filtersContent.removeClass('show');
    });

    // Изменение сортировки
    $('.sorting-option').on('click', function() {
        const sortValue = $(this).data('sort');
        
        $('.sorting-option').removeClass('selected');
        $(this).addClass('selected');
        
        const sortLabel = $(this).text();
        $('.sorting-button span').text('Сортировка: ' + sortLabel);
        
        $sortingContent.removeClass('show');
        
        loadProducts();
    });

    // Сброс фильтров
    $('.reset-filters-btn').on('click', function() {
        // Сбрасываем все чекбоксы
        $('.filter-checkbox').prop('checked', false);
        
        // Сбрасываем сортировку
        $('.sorting-option').removeClass('selected');
        $('.sorting-option[data-sort="menu_order"]').addClass('selected');
        $('.sorting-button span').text('Сортировка: По умолчанию');
        
        // Загружаем товары без фильтров
        loadProducts();
    });

    window.addEventListener('popstate', function() {
        location.reload();
    });

    // Обработка кликов по пагинации
    $(document).on('click', '.pagination .page-link[data-page]', function(e) {
        e.preventDefault();
        const page = $(this).data('page');
        
        // Добавляем номер страницы в параметры
        const params = getFilterParams();
        params.set('paged', page);
        
        // Показываем лоадер
        $('#products-container').fadeTo(300, 0.3);
        $('#products-loader').show();
        
        $.ajax({
            url: wc_ajax_params.ajax_url,
            type: 'GET',
            data: {
                action: 'filter_products',
                params: params.toString()
            },
            success: function(response) {
                if (response.success) {
                    $('#products-container').html(response.data.html);
                    
                    // Скроллим к началу товаров
                    $('html, body').animate({
                        scrollTop: $('.products-section').offset().top - 100
                    }, 500);
                }
            },
            complete: function() {
                $('#products-loader').hide();
                $('#products-container').fadeTo(300, 1);
            }
        });
    });

    // Проверяем есть ли GET параметры фильтров в URL
    function initFiltersFromURL() {
        const urlParams = new URLSearchParams(window.location.search);
        let hasFilters = false;
        
        // Проверяем наличие параметров фильтров
        for (let [key, value] of urlParams.entries()) {
            // Проверяем и обычные параметры и с []
            const cleanKey = key.replace('[]', '');
            
            if (cleanKey.startsWith('filter_pa_')) {
                hasFilters = true;
                
                const checkboxes = $('input[name="' + cleanKey + '[]"][value="' + value + '"]');
                checkboxes.prop('checked', true);
            }
        }
        
        // Если есть фильтры в URL, но товары не отфильтрованы - применяем
        if (hasFilters) {
            console.log('Обнаружены фильтры в URL, применяем автоматически...');
            // Небольшая задержка для загрузки страницы
            setTimeout(function() {
                loadProducts(false); // false = не обновлять URL
            }, 100);
        }
    }
    
    // Вызываем инициализацию при загрузке страницы
    initFiltersFromURL();

});