<?php

/**
 * Template Name: Главная
 * Template Post Type: page
 */

include 'header.php';

?>

<!-- header-menu -->
<?php get_template_part('template-parts/header-menu/header-menu'); ?>


<!-- Home section -->
<section class="home-section_main new-materials">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col">
                <h1 class="home-section-title">
                    Сэкономьте до 10% на строительных материалах с сохранением качества
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

<!-- ========== КАТАЛОГ МАТЕРИАЛОВ ========== -->
<section class="section">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">Каталог материалов</h2>
            <div class="title-underline"></div>
        </div>

        <div class="row">
            <?php
            // Получаем родительские категории WooCommerce
            $parent_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'parent'     => 0,
                'hide_empty' => true,  // ИЗМЕНЕНО: true вместо false
                'orderby'    => 'name',
                'order'      => 'ASC'
            ));

            if (!empty($parent_categories) && !is_wp_error($parent_categories)) :
                foreach ($parent_categories as $parent_category) :
                    // Получаем изображение категории
                    $thumbnail_id = get_term_meta($parent_category->term_id, 'thumbnail_id', true);
                    $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : wc_placeholder_img_src();

                    // Получаем подкатегории
                    $child_categories = get_terms(array(
                        'taxonomy'   => 'product_cat',
                        'parent'     => $parent_category->term_id,
                        'hide_empty' => true,  // ИЗМЕНЕНО: true вместо false
                        'orderby'    => 'name',
                        'order'      => 'ASC'
                    ));

                    // URL категории
                    $category_url = get_term_link($parent_category);
            ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 pb-3 pb-lg-0">
                        <div class="card card-category">
                            <img src="<?php echo esc_url($image_url); ?>"
                                class="card__image"
                                alt="<?php echo esc_attr($parent_category->name); ?>">

                            <div class="card__overlay">
                                <h3 class="card__title"><?php echo esc_html($parent_category->name); ?></h3>
                            </div>

                            <div class="card__content">
                                <?php if (!empty($child_categories) && !is_wp_error($child_categories)) : ?>
                                    <ul class="card__list">
                                        <?php foreach ($child_categories as $child_category) :
                                            $child_url = get_term_link($child_category);
                                        ?>
                                            <li>
                                                <a href="<?php echo esc_url($child_url); ?>">
                                                    <?php echo esc_html($child_category->name); ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <a href="<?php echo esc_url($category_url); ?>" class="card__button">
                                    Все категории
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- ========== КАТАЛОГ МАТЕРИАЛОВ ========== -->

<?php get_template_part( 'template-parts/free-section/free-section' ); ?>

<!-- ========== ТОВАРЫ ========== -->
<section class="section products-section">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">Популярные товары</h2>
            <div class="title-underline"></div>
        </div>

        <div class="row">
            <?php
            // Параметры запроса товаров
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 8, // Количество товаров
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post_status'    => 'publish'
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()) :
                while ($products_query->have_posts()) : 
                    $products_query->the_post();
                    
                    wc_get_template_part('content', 'product');
                    
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <div class="col-12">
                    <p class="text-center">Товары не найдены</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ========== ТОВАРЫ ========== -->

<?php get_template_part('template-parts/advantages-section/advantages-section', null, array(
    'background_color' => 'bg-light'
)); ?>


<?php include 'footer.php'; ?>