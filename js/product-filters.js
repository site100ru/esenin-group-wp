jQuery(document).ready(function ($) {
    'use strict';

    // Переменные для dropdown'ов
    const $filtersButton = $('.filters-button');
    const $filtersContent = $('.filters-dropdown-content');
    const $sortingButton = $('.sorting-button');
    const $sortingContent = $('.sorting-dropdown-content');


    // Открытие/закрытие dropdown фильтров
    $filtersButton.on('click', function (e) {
        e.stopPropagation();
        $filtersContent.toggleClass('show');
        $sortingContent.removeClass('show');
    });

    // Открытие/закрытие dropdown сортировки
    $sortingButton.on('click', function (e) {
        e.stopPropagation();
        $sortingContent.toggleClass('show');
        $filtersContent.removeClass('show');
    });

    // Закрытие dropdown при клике вне
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.filters-dropdown').length) {
            $filtersContent.removeClass('show');
        }
        if (!$(e.target).closest('.sorting-dropdown').length) {
            $sortingContent.removeClass('show');
        }
    });

    function getFilterParams() {
        const params = new URLSearchParams();

        // Получаем все чекбоксы фильтров
        $('.filter-checkbox:checked').each(function () {
            const name = $(this).attr('name');
            const value = $(this).val();

            if (name.endsWith('[]')) {
                const baseName = name.replace('[]', '');
                params.append(baseName + '[]', value);
            } else {
                params.set(name, value);
            }
        });

        const currentSort = $('.sorting-option.selected').data('sort');
        if (currentSort) {
            params.set('orderby', currentSort);
        }

        const currentURL = new URLSearchParams(window.location.search);
        let categoryId = currentURL.get('category');

        if (!categoryId) {
            const bodyClass = $('body').attr('class');
            if (bodyClass) {
                const categoryMatch = bodyClass.match(/term-(\d+)/);
                if (categoryMatch) {
                    categoryId = categoryMatch[1];
                }
            }
        }

        if (categoryId) {
            params.set('category', categoryId);
        }

        return params;
    }

    function loadProducts(updateURL = true, resetPagination = true) {
        const params = getFilterParams();

        if (resetPagination) {
            params.delete('product-page');
            params.delete('paged');
        }

        $('#products-container').fadeTo(300, 0.3);
        $('#products-loader').show();

        $.ajax({
            url: wc_ajax_params.ajax_url,
            type: 'GET',
            data: {
                action: 'filter_products',
                params: params.toString()
            },
            success: function (response) {
                if (response.success) {
                    $('#products-container').html(response.data.html);

                    if (updateURL && window.history.replaceState) {
                        const baseURL = window.location.pathname;
                        const newURL = params.toString() ? baseURL + '?' + params.toString() : baseURL;
                        window.history.replaceState({}, '', newURL);
                    }

                    $('html, body').animate({
                        scrollTop: $('.products-section').offset().top - 100
                    }, 500);
                } else {
                    console.error('Ошибка загрузки товаров');
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('Произошла ошибка при загрузке товаров. Попробуйте еще раз.');
            },
            complete: function () {
                $('#products-loader').hide();
                $('#products-container').fadeTo(300, 1);
            }
        });
    }

    $('.apply-filters-btn').on('click', function () {
        loadProducts(true, true); // Сбрасываем пагинацию
        $filtersContent.removeClass('show');
    });

    $('.sorting-option').on('click', function () {
        const sortValue = $(this).data('sort');

        $('.sorting-option').removeClass('selected');
        $(this).addClass('selected');

        const sortLabel = $(this).text();
        $('.sorting-button span').text('Сортировка: ' + sortLabel);

        $sortingContent.removeClass('show');

        loadProducts(true, true);
    });

    $('.reset-filters-btn').on('click', function () {
        $('.filter-checkbox').prop('checked', false);

        $('.sorting-option').removeClass('selected');
        $('.sorting-option[data-sort="menu_order"]').addClass('selected');
        $('.sorting-button span').text('Сортировка: По умолчанию');

        loadProducts(true, true);
    });

    window.addEventListener('popstate', function () {
        location.reload();
    });

    $(document).on('click', '.woocommerce-pagination a', function (e) {
        e.preventDefault();

        const url = $(this).attr('href');
        let page = 1;

        const pageMatch = url.match(/\/page\/(\d+)\/?/);
        if (pageMatch) {
            page = parseInt(pageMatch[1]);
        } else {
            const urlObj = new URL(url, window.location.origin);
            page = urlObj.searchParams.get('product-page') ||
                urlObj.searchParams.get('paged') || 1;
        }

        const params = getFilterParams();

        if (page > 1) {
            params.set('paged', page);
        } else {
            params.delete('paged');
        }

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
            success: function (response) {
                if (response.success) {
                    $('#products-container').html(response.data.html);

                    if (window.history.replaceState) {
                        const baseURL = window.location.pathname;
                        window.history.replaceState({}, '', baseURL);
                    }

                    // Скроллим к началу товаров
                    $('html, body').animate({
                        scrollTop: $('.products-section').offset().top - 100
                    }, 500);
                }
            },
            complete: function () {
                $('#products-loader').hide();
                $('#products-container').fadeTo(300, 1);
            }
        });
    });

    function initFiltersFromURL() {
        const urlParams = new URLSearchParams(window.location.search);
        let hasFilters = false;

        // Проверяем наличие параметров фильтров
        for (let [key, value] of urlParams.entries()) {
            const cleanKey = key.replace('[]', '');

            if (cleanKey.startsWith('filter_pa_')) {
                hasFilters = true;

                const checkboxes = $('input[name="' + cleanKey + '[]"][value="' + value + '"]');
                checkboxes.prop('checked', true);
            }
        }

        if (hasFilters) {
            console.log('Обнаружены фильтры в URL, применяем автоматически...');
            setTimeout(function () {
                loadProducts(false, false);
            }, 100);
        }
    }

    $(document).on('click', '.woocommerce-pagination a', function (e) {
        e.preventDefault();

        const url = $(this).attr('href');
        let page = 1;

        const pageMatch = url.match(/\/page\/(\d+)\/?/);
        if (pageMatch) {
            page = parseInt(pageMatch[1]);
        } else {
            const urlObj = new URL(url, window.location.origin);
            page = urlObj.searchParams.get('product-page') ||
                urlObj.searchParams.get('paged') || 1;
        }

        const params = getFilterParams();

        if (page > 1) {
            params.set('paged', page);
        } else {
            params.delete('paged');
        }

        $('#products-container').fadeTo(300, 0.3);
        $('#products-loader').show();

        $.ajax({
            url: wc_ajax_params.ajax_url,
            type: 'GET',
            data: {
                action: 'filter_products',
                params: params.toString()
            },
            success: function (response) {
                if (response.success) {
                    $('#products-container').html(response.data.html);

                    if (window.history.replaceState) {
                        const baseURL = window.location.pathname;
                        const newURL = params.toString() ? baseURL + '?' + params.toString() : baseURL;
                        window.history.replaceState({}, '', newURL);
                    }

                    $('html, body').animate({
                        scrollTop: $('.products-section').offset().top - 100
                    }, 500);
                }
            },
            complete: function () {
                $('#products-loader').hide();
                $('#products-container').fadeTo(300, 1);
            }
        });
    });

    // Вызываем инициализацию при загрузке страницы
    initFiltersFromURL();

});