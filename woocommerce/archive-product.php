<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');

?>

<!-- header-menu -->
<?php get_template_part('template-parts/header-menu/header-menu'); ?>

<!-- Home section -->
<section class="home-section_main archive-page">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col">
                <h1 class="home-section-title">
                    <?php
                    if (is_product_category()) {
                        single_cat_title();
                    } elseif (is_shop()) {
                        echo 'Сэкономьте до 10% на строительных материалах с сохранением качества';
                    } else {
                        woocommerce_page_title();
                    }
                    ?>
                </h1>

                <div class="col-md-6">
                    <div class="search-block">
                        <?php echo do_shortcode('[fibosearch]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Home section -->

<!-- Breadcrumbs -->
<section class="bg-white" style="margin-bottom: -24px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs pt-4 pb-0">
                    <?php woocommerce_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== ТОВАРЫ ========== -->
<section class="section products-section">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">
                <?php
                if (is_product_category()) {
                    single_cat_title();
                } else {
                    woocommerce_page_title();
                }
                ?>
            </h2>
            <div class="title-underline"></div>
        </div>

        <?php
        if (is_product_category()) {

            $current_term    = get_queried_object();
            $tab_parent_id   = $current_term->term_id;
        } elseif (is_shop()) {

            $tab_parent_id = 0;
        } else {
            $tab_parent_id = null;
        }

        if ($tab_parent_id !== null) :
            $subcategories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'parent'     => $tab_parent_id,
                'hide_empty' => true,
            ));

            if (! empty($subcategories) && ! is_wp_error($subcategories)) :
        ?>
                <div class="row">
                    <div class="col text-center mb-4 mb-lg-5">
                        <div class="nav-scroller mb-0">
                            <ul class="nav d-flex m-auto align-items-center tablist" id="myTab" role="tablist">
                                <?php
                                $sub_count = 0;
                                foreach ($subcategories as $subcategory) :
                                    if ($sub_count > 0) :
                                ?>
                                        <li class="nav-item">
                                            <span class="nav-link px-0">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/point.svg" alt="Разделительная точка">
                                            </span>
                                        </li>
                                    <?php endif; ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo get_term_link($subcategory); ?>">
                                            <?php echo esc_html($subcategory->name); ?>
                                        </a>
                                    </li>
                                <?php
                                    $sub_count++;
                                endforeach;
                                ?>
                            </ul>
                        </div>
                        <div class="d-block d-md-none text-center mb-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-menu-coursor.svg" alt="Разделительная точка">
                        </div>
                    </div>
                </div>
        <?php
            endif; // subcategories not empty
        endif;     // tab_parent_id !== null
        ?>

        <!-- ========== ФИЛЬТРЫ И СОРТИРОВКА ========== -->
        <div class="filters-sorting-wrapper">
            <div class="filters-sorting-row">
                <!-- Фильтры -->
                <div class="filters-dropdown">
                    <button class="filters-button" type="button">
                        <span>Фильтры</span>
                    </button>
                    <div class="filters-dropdown-content">
                        <?php
                        $filters_cat_id = is_product_category() ? get_queried_object_id() : 0;
                        $filters_html   = mytheme_get_filters_for_category($filters_cat_id);
                        ?>
                        <form id="product-filters-form" class="filters-grid">
                            <?php echo $filters_html; ?>
                        </form>

                        <!-- Кнопка Применить -->
                        <button class="btn btn-corporate-color-1 apply-filters-btn" type="button">Применить</button>
                    </div>
                </div>

                <!-- Сортировка -->
                <div class="sorting-dropdown">
                    <button class="sorting-button" type="button">
                        <span>Сортировка:
                            <?php
                            $current_orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'menu_order';
                            $sort_labels = array(
                                'menu_order' => 'По умолчанию',
                                'popularity' => 'По популярности',
                                'rating'     => 'По рейтингу',
                                'date'       => 'Сначала новинки',
                                'price'      => 'Сначала дешёвые',
                                'price-desc' => 'Сначала дорогие',
                            );
                            echo isset($sort_labels[$current_orderby]) ? $sort_labels[$current_orderby] : 'По умолчанию';
                            ?>
                        </span>
                    </button>
                    <div class="sorting-dropdown-content">
                        <div class="sorting-option <?php echo ($current_orderby === 'menu_order') ? 'selected' : ''; ?>" data-sort="menu_order">По умолчанию</div>
                        <div class="sorting-option <?php echo ($current_orderby === 'price-desc') ? 'selected' : ''; ?>" data-sort="price-desc">Сначала дорогие</div>
                        <div class="sorting-option <?php echo ($current_orderby === 'price') ? 'selected' : ''; ?>" data-sort="price">Сначала дешёвые</div>
                        <div class="sorting-option <?php echo ($current_orderby === 'date') ? 'selected' : ''; ?>" data-sort="date">Сначала новинки</div>
                        <div class="sorting-option <?php echo ($current_orderby === 'popularity') ? 'selected' : ''; ?>" data-sort="popularity">По популярности</div>
                        <div class="sorting-option <?php echo ($current_orderby === 'rating') ? 'selected' : ''; ?>" data-sort="rating">По рейтингу</div>
                    </div>
                </div>

                <!-- Кнопка сброса фильтров -->
                <button class="btn btn-corporate-color-outline-1 reset-filters-btn" type="button">
                    Сбросить фильтры
                </button>
            </div>
        </div>
        <!-- ========== КОНЕЦ ФИЛЬТРЫ И СОРТИРОВКА ========== -->

        <!-- Контейнер для товаров (будет обновляться через AJAX) -->
        <div id="products-container">
            <?php
            if (woocommerce_product_loop()) {

                woocommerce_product_loop_start();

                if (wc_get_loop_prop('total')) {
                    while (have_posts()) {
                        the_post();
                        do_action('woocommerce_shop_loop');
                        wc_get_template_part('content', 'product');
                    }
                }

                woocommerce_product_loop_end();

                do_action('woocommerce_after_shop_loop');
            } else {
                do_action('woocommerce_no_products_found');
            }
            ?>
        </div>
        <!-- Лоадер -->
        <div id="products-loader" style="display: none;">
            <div class="text-center py-5">
                <div class="spinner-border" role="status" style="width: 3rem; height: 3rem; color: var(--bs-primary, #0d6efd); border-width: 0.3rem;">
                    <span class="visually-hidden">Загрузка...</span>
                </div>
                <p class="mt-3" style="color: #6c757d; font-size: 0.875rem;">Загрузка товаров...</p>
            </div>
        </div>

    </div>
</section>
<!-- ========== ТОВАРЫ ========== -->

<!-- ========== ТЕКСТОВЫЙ БЛОК  ========== -->
<?php
// Описание: для категории берём term_description(), для /shop/ — содержимое страницы магазина
$cat_description = '';
$cat_title       = '';

if (is_product_category()) {
    $current_term    = get_queried_object();
    $cat_description = gl_get_cat_description($current_term->term_id);
    $cat_title       = $current_term->name;
} elseif (is_shop()) {
    $shop_page       = get_post(wc_get_page_id('shop'));
    $cat_description = $shop_page ? apply_filters('the_content', $shop_page->post_content) : '';
    $cat_title       = get_the_title(wc_get_page_id('shop'));
}

if ($cat_description) : ?>
    <section class="section bg-light">
        <div class="container">
            <div class="section-title-wrapper">
                <h2 class="section-title"><?php echo esc_html($cat_title); ?></h2>
                <div class="title-underline"></div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo wp_kses_post($cat_description); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- ========== ТЕКСТОВЫЙ БЛОК  ========== -->


<?php get_template_part('template-parts/advantages-section/advantages-section'); ?>

<?php get_template_part('template-parts/how-buy/how-buy', null, array(
    'background_color' => 'bg-light'
)); ?>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' ); // Отключаем сайдбар

get_footer();
