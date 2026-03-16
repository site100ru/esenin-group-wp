<?php

/*** MENU ***/
/* Bootstrap 5 wp_nav_menu walker */
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $dropdown_menu_class[] = '';
        foreach ($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $this->current_item = $item;

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-menu dropdown-menu-end';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
        $nav_link_class = ($depth > 0) ? 'dropdown-item header-link ' : 'nav-link header-link ';
        $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        // Показываем точки только в горизонтальных меню (не в footer колонках)
        $is_footer_menu = (isset($args->items_wrap) && strpos($args->items_wrap, 'flex-column') !== false);

        if (!$is_footer_menu) {
            $item_title = $item->title;
            $dropdown = in_array('dropdown', $classes);
            $is_last_item = ($item_title == 'Контакты');

            if (!$is_last_item && $dropdown == false && $depth == 0) {
                $output .= '
        <li class="nav-item d-none d-lg-inline">
            <img loading="lazy" src="' . get_template_directory_uri() . '/img/ico/point.svg" alt="Декоративная точка" class="img-fluid dec">
        </li>
    ';
            }
        }
    }
}
/* End Bootstrap 5 wp_nav_menu walker */


/* Register a new menu */
add_action('after_setup_theme', function () {
    register_nav_menus([
        'main-menu' => 'Main menu',
        'mobail-header-collapse' => 'Mobail header collapse',
        'contacts-desktop-menu' => 'Contacts desktop menu',
        'footer-menu-1' => 'footer-menu-1',
        'footer-menu-2' => 'footer-menu-2'
    ]);
});
/* End register a new menu */
/*** END MENU ***/


/*** WOOCOMMERCE SUPPORT ***/
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

/* Изменяем размер миниатюр WooCommerce */
add_filter('woocommerce_get_image_size_thumbnail', 'add_thumbnail_size', 1, 10);
function add_thumbnail_size($size)
{
    $size['width'] = 600;
    $size['height'] = 400;
    $size['crop'] = 1;
    return $size;
}

/* Отключаем ненужные опции вывода на страницу товара */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

/* Изменяем значок валюты */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'RUB':
            $currency_symbol = '₽';
            break;
    }
    return $currency_symbol;
}
/*** END WOOCOMMERCE SUPPORT ***/


/*** BREADCRUMBS ***/
add_filter('woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs');
function jk_woocommerce_breadcrumbs()
{
    return array(
        'delimiter'   => ' / ',
        'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="/" class="text-decoration-none"><img src="' . get_template_directory_uri() . '/img/ico/home.svg" alt="Домик"></a> / ',
        'wrap_after'  => '</nav>',
        'before'      => '',
        'after'       => '',
        'home'        => null,
    );
}

add_filter('woocommerce_get_breadcrumb', 'mytheme_fix_breadcrumbs', 10, 2);
function mytheme_fix_breadcrumbs($crumbs, $breadcrumb)
{
    if (isset($_GET['s']) && $_GET['s'] !== '') {
        return [
            [sprintf('Результат поиска &laquo;%s&raquo;', esc_html(get_search_query())), ''],
        ];
    }

    if (is_tax('portfolio-cat')) {
        array_splice($crumbs, 0, 1, [[_x('Наши работы', 'breadcrumb', 'woocommerce'), home_url('/portfolio/')]]);
        return $crumbs;
    }

    $shop_id = wc_get_page_id('shop');
    if ($shop_id && $shop_id !== -1 && !is_shop()) {
        $shop_crumb = [get_the_title($shop_id), get_permalink($shop_id)];
        if (empty($crumbs[0][1]) || $crumbs[0][1] !== get_permalink($shop_id)) {
            array_unshift($crumbs, $shop_crumb);
        }
    }

    return $crumbs;
}
/*** END BREADCRUMBS ***/


/*** НАСТРОЙКИ ТЕМЫ: КОНТАКТЫ И КОД СЧЁТЧИКА ***/
function mytheme_customize_register($wp_customize)
{
    // Секция аналитики
    $wp_customize->add_section('mytheme_analytics', array(
        'title'    => 'Аналитика и счетчики',
        'priority' => 200,
    ));

    $wp_customize->add_setting('mytheme_counter_head', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_counter_head', array(
        'label'       => 'Код счетчика (в <head>)',
        'description' => 'Вставьте код, который должен быть в <head> (например, Google Analytics, Meta Pixel)',
        'section'     => 'mytheme_analytics',
        'type'        => 'textarea',
    ));

    $wp_customize->add_setting('mytheme_counter_body', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_counter_body', array(
        'label'       => 'Код счетчика (перед </body>)',
        'description' => 'Вставьте код, который должен быть перед закрывающим тегом </body> (например, Яндекс.Метрика)',
        'section'     => 'mytheme_analytics',
        'type'        => 'textarea',
    ));

    // Панель контактов
    $wp_customize->add_panel('contact_panel', array(
        'title'       => 'Контакты',
        'description' => 'Описание контактов',
        'priority'    => 205,
    ));

    /* ОСНОВНОЙ НОМЕР ТЕЛЕФОНА */
    $wp_customize->add_section('mytheme_contacts', array(
        'title' => 'Основной номер телефона', 'panel' => 'contact_panel', 'priority' => 5,
    ));
    $wp_customize->add_setting('mytheme_main_phone_country_code', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_main_phone_country_code', array(
        'label' => 'Код страны', 'description' => 'Например: 8 или +7',
        'section' => 'mytheme_contacts', 'type' => 'input',
        'input_attrs' => array('placeholder' => '', 'style' => 'width: 60px; display: inline-block;'),
    ));
    $wp_customize->add_setting('mytheme_main_phone_region_code', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_main_phone_region_code', array(
        'label' => 'Код региона', 'description' => 'Например: 800, без скобок',
        'section' => 'mytheme_contacts', 'type' => 'input',
        'input_attrs' => array('placeholder' => '', 'style' => 'width: 60px; display: inline-block;'),
    ));
    $wp_customize->add_setting('mytheme_main_phone_number', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_main_phone_number', array(
        'label' => 'Номер телефона', 'description' => 'Например: 880-80-88',
        'section' => 'mytheme_contacts', 'type' => 'input',
        'input_attrs' => array('placeholder' => '', 'style' => 'width: 100px; display: inline-block;'),
    ));

    /* ДОПОЛНИТЕЛЬНЫЙ НОМЕР ТЕЛЕФОНА */
    $wp_customize->add_section('additional_phone_number', array(
        'title' => 'Дополнительный номер телефона', 'panel' => 'contact_panel', 'priority' => 10,
    ));
    $wp_customize->add_setting('additional_phone_country_code', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('additional_phone_country_code', array(
        'label' => 'Код страны', 'description' => 'Например: 8 или +7',
        'section' => 'additional_phone_number', 'type' => 'input',
        'input_attrs' => array('placeholder' => '', 'style' => 'width: 60px; display: inline-block;'),
    ));
    $wp_customize->add_setting('additional_phone_region_code', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('additional_phone_region_code', array(
        'label' => 'Код региона', 'description' => 'Например: 800, без скобок',
        'section' => 'additional_phone_number', 'type' => 'input',
        'input_attrs' => array('placeholder' => '', 'style' => 'width: 60px; display: inline-block;'),
    ));
    $wp_customize->add_setting('additional_phone_number', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('additional_phone_number', array(
        'label' => 'Номер телефона', 'description' => 'Например: 880-80-88',
        'section' => 'additional_phone_number', 'type' => 'input',
        'input_attrs' => array('placeholder' => '', 'style' => 'width: 100px; display: inline-block;'),
    ));

    /* ДОПОЛНИТЕЛЬНЫЕ НОМЕРА ТЕЛЕФОНОВ (повторитель) */
    $wp_customize->add_section('mytheme_contacts_phones_extra', array(
        'title' => 'Дополнительные номера телефонов', 'panel' => 'contact_panel', 'priority' => 15,
    ));
    $wp_customize->add_setting('mytheme_phones_extra_json', array(
        'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Mytheme_Phone_Repeater_Control($wp_customize, 'mytheme_phones_extra_json', array(
        'label'       => 'Дополнительные телефоны',
        'description' => 'Добавьте дополнительные номера телефонов. Можно добавить несколько.',
        'section'     => 'mytheme_contacts_phones_extra',
    )));

    /* EMAIL */
    $wp_customize->add_section('mytheme_contacts_email', array(
        'title' => 'Email', 'panel' => 'contact_panel', 'priority' => 20,
    ));
    $wp_customize->add_setting('mytheme_email', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_email', array(
        'label' => 'Email', 'section' => 'mytheme_contacts_email', 'type' => 'input',
    ));

    /* ДОПОЛНИТЕЛЬНЫЕ EMAIL (повторитель) */
    $wp_customize->add_section('mytheme_contacts_emails_extra', array(
        'title' => 'Дополнительные почты для приема писем', 'panel' => 'contact_panel', 'priority' => 25,
    ));
    $wp_customize->add_setting('mytheme_emails_extra_json', array(
        'default' => '', 'transport' => 'postMessage', 'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Mytheme_Email_Repeater_Control($wp_customize, 'mytheme_emails_extra_json', array(
        'label'       => 'Дополнительные Email адреса',
        'description' => 'Добавьте дополнительные email адреса для приема почты. Можно добавить несколько.',
        'section'     => 'mytheme_contacts_emails_extra',
    )));

    /* Telegram */
    $wp_customize->add_section('mytheme_contacts_telegram', array('title' => 'Telegram', 'panel' => 'contact_panel', 'priority' => 30));
    $wp_customize->add_setting('mytheme_telegram', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_telegram', array(
        'label' => 'Telegram', 'description' => 'Укажите ссылку на Telegram',
        'section' => 'mytheme_contacts_telegram', 'type' => 'input',
    ));

    /* Whatsapp */
    $wp_customize->add_section('mytheme_contacts_whatsapp', array('title' => 'Whatsapp', 'panel' => 'contact_panel', 'priority' => 35));
    $wp_customize->add_setting('mytheme_whatsapp', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_whatsapp', array(
        'label' => 'Whatsapp', 'description' => 'Укажите ссылку на Whatsapp',
        'section' => 'mytheme_contacts_whatsapp', 'type' => 'input',
    ));

    /* VK */
    $wp_customize->add_section('mytheme_contacts_vk', array('title' => 'Вконтакте', 'panel' => 'contact_panel', 'priority' => 40));
    $wp_customize->add_setting('mytheme_vk', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_vk', array(
        'label' => 'Вконтакте', 'description' => 'Укажите ссылку на Вконтакте',
        'section' => 'mytheme_contacts_vk', 'type' => 'input',
    ));

    /* Instagram */
    $wp_customize->add_section('mytheme_contacts_instagram', array('title' => 'Instagram', 'panel' => 'contact_panel', 'priority' => 45));
    $wp_customize->add_setting('mytheme_instagram', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_instagram', array(
        'label' => 'Instagram', 'description' => 'Укажите ссылку на Instagram',
        'section' => 'mytheme_contacts_instagram', 'type' => 'input',
    ));

    /* Address */
    $wp_customize->add_section('mytheme_contacts_address', array('title' => 'Адрес', 'panel' => 'contact_panel', 'priority' => 50));
    $wp_customize->add_setting('mytheme_address', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_address', array(
        'label' => 'Адрес', 'description' => 'Укажите адрес организации',
        'section' => 'mytheme_contacts_address', 'type' => 'input',
    ));
    $wp_customize->add_setting('mytheme_address_full', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_address_full', array(
        'label' => 'Адрес (полный)', 'description' => 'Укажите полный адрес организации с подробностями',
        'section' => 'mytheme_contacts_address', 'type' => 'textarea',
    ));

    /* MAX */
    $wp_customize->add_section('mytheme_contacts_max', array('title' => 'МАХ', 'panel' => 'contact_panel', 'priority' => 55));
    $wp_customize->add_setting('mytheme_max', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_max', array(
        'label' => 'Адрес', 'description' => 'Укажите ссылку на МАХ',
        'section' => 'mytheme_contacts_max', 'type' => 'input',
    ));

    /* Время работы */
    $wp_customize->add_section('mytheme_contacts_job_time', array('title' => 'Время работы', 'panel' => 'contact_panel', 'priority' => 60));
    $wp_customize->add_setting('mytheme_job_time', array('default' => '', 'transport' => 'postMessage'));
    $wp_customize->add_control('mytheme_job_time', array(
        'label' => 'Время работы', 'description' => 'Укажите время работы',
        'section' => 'mytheme_contacts_job_time', 'type' => 'input',
    ));
}
add_action('customize_register', 'mytheme_customize_register');


/**
 * Кастомные контролы — только в контексте кастомайзера
 */
if (class_exists('WP_Customize_Control')) {

    class Mytheme_Phone_Repeater_Control extends WP_Customize_Control
    {
        public $type = 'phone_repeater';

        public function render_content()
        {
            $values = json_decode($this->value(), true);
            if (!is_array($values)) {
                $values = array();
            }
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php if (!empty($this->description)) : ?>
                    <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
                <?php endif; ?>
            </label>

            <div class="phone-repeater-list">
                <?php foreach ($values as $index => $phone) : ?>
                    <div class="phone-repeater-item" style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <input type="text" placeholder="Номер для отображения (напр: 8 (4912) 77-70-98)" value="<?php echo esc_attr($phone['display']); ?>" class="phone-display" style="width: 100%; margin-bottom: 5px;" />
                        <input type="text" placeholder="Номер для ссылки (напр: 84912777098)" value="<?php echo esc_attr($phone['link']); ?>" class="phone-link" style="width: 100%; margin-bottom: 5px;" />
                        <button type="button" class="button remove-phone" style="color: #a00;">Удалить</button>
                    </div>
                <?php endforeach; ?>
            </div>

            <button type="button" class="button add-phone" style="margin-top: 10px;">+ Добавить телефон</button>

            <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr($this->value()); ?>" class="phone-repeater-value" />

            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    var control = $('#customize-control-<?php echo esc_js($this->id); ?>');

                    function updateValue() {
                        var phones = [];
                        control.find('.phone-repeater-item').each(function() {
                            var display = $(this).find('.phone-display').val();
                            var link = $(this).find('.phone-link').val();
                            if (display || link) {
                                phones.push({ display: display, link: link });
                            }
                        });
                        control.find('.phone-repeater-value').val(JSON.stringify(phones)).trigger('change');
                    }

                    control.on('click', '.add-phone', function() {
                        var template = '<div class="phone-repeater-item" style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">' +
                            '<input type="text" placeholder="Номер для отображения (напр: 8 (4912) 77-70-98)" class="phone-display" style="width: 100%; margin-bottom: 5px;" />' +
                            '<input type="text" placeholder="Номер для ссылки (напр: 84912777098)" class="phone-link" style="width: 100%; margin-bottom: 5px;" />' +
                            '<button type="button" class="button remove-phone" style="color: #a00;">Удалить</button>' +
                            '</div>';
                        control.find('.phone-repeater-list').append(template);
                    });

                    control.on('click', '.remove-phone', function() {
                        $(this).closest('.phone-repeater-item').remove();
                        updateValue();
                    });

                    control.on('input', '.phone-display, .phone-link', function() {
                        updateValue();
                    });
                });
            </script>
        <?php
        }
    }


    class Mytheme_Email_Repeater_Control extends WP_Customize_Control
    {
        public $type = 'email_repeater';

        public function render_content()
        {
            $values = json_decode($this->value(), true);
            if (!is_array($values)) {
                $values = array();
            }
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php if (!empty($this->description)) : ?>
                    <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
                <?php endif; ?>
            </label>

            <div class="email-repeater-list">
                <?php foreach ($values as $index => $email) : ?>
                    <div class="email-repeater-item" style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        <input type="email" placeholder="Email адрес" value="<?php echo esc_attr($email['email']); ?>" class="email-address" style="width: 100%; margin-bottom: 5px;" />
                        <button type="button" class="button remove-email" style="color: #a00;">Удалить</button>
                    </div>
                <?php endforeach; ?>
            </div>

            <button type="button" class="button add-email" style="margin-top: 10px;">+ Добавить email</button>

            <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr($this->value()); ?>" class="email-repeater-value" />

            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    var control = $('#customize-control-<?php echo esc_js($this->id); ?>');

                    function updateValue() {
                        var emails = [];
                        control.find('.email-repeater-item').each(function() {
                            var email = $(this).find('.email-address').val();
                            if (email) {
                                emails.push({ email: email });
                            }
                        });
                        control.find('.email-repeater-value').val(JSON.stringify(emails)).trigger('change');
                    }

                    control.on('click', '.add-email', function() {
                        var template = '<div class="email-repeater-item" style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">' +
                            '<input type="email" placeholder="Email адрес" class="email-address" style="width: 100%; margin-bottom: 5px;" />' +
                            '<button type="button" class="button remove-email" style="color: #a00;">Удалить</button>' +
                            '</div>';
                        control.find('.email-repeater-list').append(template);
                    });

                    control.on('click', '.remove-email', function() {
                        $(this).closest('.email-repeater-item').remove();
                        updateValue();
                    });

                    control.on('input', '.email-address', function() {
                        updateValue();
                    });
                });
            </script>
        <?php
        }
    }
}
/*** END НАСТРОЙКИ ТЕМЫ ***/


/*** ХЕЛПЕРЫ КОНТАКТОВ ***/
function mytheme_get_phone($type = 'main')
{
    if ($type === 'main') {
        $country_code = get_theme_mod('mytheme_main_phone_country_code', '');
        $region_code  = get_theme_mod('mytheme_main_phone_region_code', '');
        $number       = get_theme_mod('mytheme_main_phone_number', '');
    } else {
        $country_code = get_theme_mod('additional_phone_country_code', '');
        $region_code  = get_theme_mod('additional_phone_region_code', '');
        $number       = get_theme_mod('additional_phone_number', '');
    }
    if (empty($country_code) || empty($region_code) || empty($number)) return '';
    return $country_code . ' (' . $region_code . ') ' . $number;
}

function mytheme_get_phone_link($type = 'main')
{
    if ($type === 'main') {
        $country_code = get_theme_mod('mytheme_main_phone_country_code', '');
        $region_code  = get_theme_mod('mytheme_main_phone_region_code', '');
        $number       = get_theme_mod('mytheme_main_phone_number', '');
    } else {
        $country_code = get_theme_mod('additional_phone_country_code', '');
        $region_code  = get_theme_mod('additional_phone_region_code', '');
        $number       = get_theme_mod('additional_phone_number', '');
    }
    if (empty($country_code) || empty($region_code) || empty($number)) return '';
    $phone_link = $country_code . $region_code . $number;
    return preg_replace('/[^0-9+]/', '', $phone_link);
}

function mytheme_get_email()        { return get_theme_mod('mytheme_email', ''); }
function mytheme_get_email_link()   { $e = get_theme_mod('mytheme_email', ''); return !empty($e) ? 'mailto:' . $e : ''; }
function mytheme_get_telegram()     { return get_theme_mod('mytheme_telegram', ''); }
function mytheme_get_vk()           { return get_theme_mod('mytheme_vk', ''); }
function mytheme_get_address()      { return get_theme_mod('mytheme_address', ''); }
function mytheme_get_address_full() { return get_theme_mod('mytheme_address_full', ''); }
function mytheme_get_job_time()     { return get_theme_mod('mytheme_job_time', ''); }
function mytheme_get_max()          { return get_theme_mod('mytheme_max', ''); }
function mytheme_get_instagram()    { return get_theme_mod('mytheme_instagram', ''); }

function mytheme_get_whatsapp($with_params = true)
{
    $whatsapp = get_theme_mod('mytheme_whatsapp', '');
    if (empty($whatsapp)) return '';
    if ($with_params && strpos($whatsapp, '?') === false) {
        $whatsapp .= '?web=1&app_absent=1';
    }
    return $whatsapp;
}

function mytheme_get_phones_extra()
{
    $phones_json = get_theme_mod('mytheme_phones_extra_json', '');
    $phones      = json_decode($phones_json, true);
    return is_array($phones) ? $phones : array();
}

function mytheme_get_emails_extra()
{
    $emails_json = get_theme_mod('mytheme_emails_extra_json', '');
    $emails      = json_decode($emails_json, true);
    return is_array($emails) ? $emails : array();
}
/*** END ХЕЛПЕРЫ КОНТАКТОВ ***/


// Excerpt для страниц
add_action('init', 'add_excerpt_to_pages');
function add_excerpt_to_pages()
{
    add_post_type_support('page', 'excerpt');
}


/*** DESCRIPTION ДЛЯ КАЖДОЙ СТРАНИЦЫ ***/
function echo_description()
{
    if (is_category()) {
        echo wp_strip_all_tags(category_description());
    } elseif (is_product()) {
        $product = wc_get_product(get_the_ID());
        $short_description = $product->get_short_description();
        echo wp_strip_all_tags($short_description);
    } elseif (is_product_category()) {
        foreach (wp_get_post_terms(get_the_id(), 'product_cat') as $term) {
            if ($term) {
                if ($term->description) {
                    echo $term->description;
                }
            }
        }
    } elseif (is_post_type_archive('portfolio')) {
        echo 'Портфолио';
    } elseif (is_tax('portfolio-cat')) {
        $term = get_queried_object();
        echo $term->description;
    } elseif (is_shop()) {
        $shop_page_id = wc_get_page_id('shop');
        echo get_the_excerpt($shop_page_id);
    } elseif (is_page()) {
        echo get_the_excerpt();
    } else {
        echo get_the_title();
    }
}
/*** END DESCRIPTION ***/


/*** ROBOTS.TXT ***/
add_filter('robots_txt', 'custom_robots_txt');
function custom_robots_txt($output)
{
    $output  = "User-agent: *\n";
    $output .= "Disallow: *?add-to-cart=*\n";
    return $output;
}
/*** END ROBOTS.TXT ***/


/*** ДОКУМЕНТЫ ТОВАРА ***/
function mytheme_has_product_documents()
{
    global $product;
    if (!$product) return false;
    $doc_links = get_post_meta($product->get_id(), '_gl_documents_links', true);
    return !empty($doc_links) && is_array($doc_links);
}

function mytheme_get_product_documents()
{
    global $product;
    if (!$product) return [];
    $doc_links = get_post_meta($product->get_id(), '_gl_documents_links', true);
    if (empty($doc_links) || !is_array($doc_links)) return [];
    $result = [];
    foreach ($doc_links as $doc) {
        $result[] = ['url' => $doc['url'], 'title' => $doc['type'] ?? 'Документ'];
    }
    return $result;
}
/*** END ДОКУМЕНТЫ ТОВАРА ***/


/*** АРХИВ ТОВАРОВ ***/
function mytheme_get_current_sorting_label()
{
    $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'price-desc';
    $labels  = array(
        'price-desc' => 'Сначала дорогие',
        'price'      => 'Сначала дешёвые',
        'date'       => 'Сначала новинки',
        'title'      => 'По названию (А-Я)',
        'title-desc' => 'По названию (Я-А)',
    );
    return isset($labels[$orderby]) ? $labels[$orderby] : 'Сначала дорогие';
}

add_filter('woocommerce_product_loop_start', 'mytheme_product_loop_start');
function mytheme_product_loop_start($html) { return '<div class="row">'; }

add_filter('woocommerce_product_loop_end', 'mytheme_product_loop_end');
function mytheme_product_loop_end($html) { return '</div>'; }

add_filter('woocommerce_pagination_args', 'mytheme_woocommerce_pagination_args');
function mytheme_woocommerce_pagination_args($args)
{
    $args['prev_text'] = '<span aria-hidden="true">←</span>';
    $args['next_text'] = '<span aria-hidden="true">→</span>';
    $args['end_size']  = 1;
    $args['mid_size']  = 2;
    return $args;
}

add_filter('woocommerce_catalog_orderby', 'mytheme_custom_catalog_orderby');
function mytheme_custom_catalog_orderby($orderby_options)
{
    return array(
        'menu_order' => 'По умолчанию',
        'date'       => 'Сначала новинки',
        'price'      => 'Сначала дешёвые',
        'price-desc' => 'Сначала дорогие',
    );
}

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count',    20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

add_action('pre_get_posts', 'mytheme_custom_product_sorting');
function mytheme_custom_product_sorting($query)
{
    if (!is_admin() && $query->is_main_query() && (is_shop() || is_product_category() || is_product_tag())) {
        $orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : '';
        switch ($orderby) {
            case 'price-desc':
                $query->set('meta_key', '_price');
                $query->set('orderby', 'meta_value_num');
                $query->set('order', 'DESC');
                break;
            case 'price-asc':
            case 'price':
                $query->set('meta_key', '_price');
                $query->set('orderby', 'meta_value_num');
                $query->set('order', 'ASC');
                break;
            case 'new':
            case 'date':
                $query->set('orderby', 'date');
                $query->set('order', 'DESC');
                break;
            case 'name-asc':
            case 'title':
                $query->set('orderby', 'title');
                $query->set('order', 'ASC');
                break;
            case 'name-desc':
            case 'title-desc':
                $query->set('orderby', 'title');
                $query->set('order', 'DESC');
                break;
            case 'popular':
            case 'popularity':
                $query->set('meta_key', 'total_sales');
                $query->set('orderby', 'meta_value_num');
                $query->set('order', 'DESC');
                break;
        }
    }
}
/*** END АРХИВ ТОВАРОВ ***/


/*** ВИДЖЕТЫ ***/
add_action('widgets_init', 'mytheme_register_sidebars');
function mytheme_register_sidebars()
{
    register_sidebar(array(
        'name'          => 'Фильтры товаров',
        'id'            => 'shop-filters-sidebar',
        'description'   => 'Виджеты для фильтрации товаров (отображаются в блоке фильтров)',
        'before_widget' => '<div id="%1$s" class="widget filter-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="filter-widget-title">',
        'after_title'   => '</h4>',
    ));
}

add_filter('widget_title', 'mytheme_filter_widget_title', 10, 3);
function mytheme_filter_widget_title($title, $instance = array(), $id_base = '')
{
    if (is_active_widget(false, false, 'woocommerce_layered_nav') && !empty($instance['attribute'])) {
        $taxonomy        = wc_attribute_taxonomy_name($instance['attribute']);
        $attribute_label = wc_attribute_label($taxonomy);
        if ($attribute_label) return $attribute_label;
    }
    return $title;
}
/*** END ВИДЖЕТЫ ***/


/*** FIBOSEARCH ***/
add_filter('dgwt/wcas/form/class', 'mytheme_fibosearch_custom_classes');
function mytheme_fibosearch_custom_classes($classes)
{
    $classes .= ' search-block-fibosearch';
    return $classes;
}

add_filter('dgwt/wcas/form/magnifier_ico', function ($html, $class) {
    return '<img src="' . get_template_directory_uri() . '/img/ico/loop.svg" alt="">';
}, 10, 2);
/*** END FIBOSEARCH ***/


/*** СКРИПТЫ ***/
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
function mytheme_enqueue_scripts()
{
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_product_filters_scripts');
function enqueue_product_filters_scripts()
{
    if (is_shop() || is_product_category() || is_product_tag()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script(
            'product-filters',
            get_template_directory_uri() . '/js/product-filters.js',
            array('jquery'),
            '1.0.0',
            true
        );
        wp_localize_script('product-filters', 'wc_ajax_params', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('product_filter_nonce'),
        ));
    }
}
/*** END СКРИПТЫ ***/


/*** AJAX: ФИЛЬТРАЦИЯ ТОВАРОВ ***/
add_action('wp_ajax_filter_products',        'ajax_filter_products');
add_action('wp_ajax_nopriv_filter_products', 'ajax_filter_products');

function ajax_filter_products()
{
    parse_str($_GET['params'], $params);

    $current_page = 1;
    if (isset($params['product-page'])) {
        $current_page = intval($params['product-page']);
    } elseif (isset($params['paged'])) {
        $current_page = intval($params['paged']);
    }

    if (isset($params['orderby'])) {
        $_GET['orderby'] = $params['orderby'];
    }
    $_GET['paged'] = $current_page;

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => get_option('posts_per_page'),
        'post_status'    => 'publish',
        'paged'          => $current_page,
    );

    $ordering_args   = WC()->query->get_catalog_ordering_args();
    $args['orderby'] = $ordering_args['orderby'];
    $args['order']   = $ordering_args['order'];
    if (isset($ordering_args['meta_key'])) {
        $args['meta_key'] = $ordering_args['meta_key'];
    }

    if (isset($params['category']) && !empty($params['category'])) {
        $args['tax_query'][] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => intval($params['category']),
        );
    }

    $attribute_tax_query = array();
    foreach ($params as $key => $value) {
        if (strpos($key, 'filter_pa_') === 0) {
            $taxonomy = str_replace('filter_', '', $key);
            $terms    = is_array($value) ? array_map('sanitize_title', $value) : array(sanitize_title($value));
            $terms    = array_filter($terms);
            if (!empty($terms)) {
                $attribute_tax_query[] = array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug',
                    'terms'    => array_values($terms),
                    'operator' => count($terms) > 1 ? 'AND' : 'IN',
                );
            }
        }
    }

    $final_tax_query = isset($args['tax_query']) ? $args['tax_query'] : array();
    foreach ($attribute_tax_query as $single_attr_query) {
        $final_tax_query[] = $single_attr_query;
    }
    if (!empty($final_tax_query)) {
        $final_tax_query['relation'] = 'AND';
        $args['tax_query'] = $final_tax_query;
    }

    $query = new WP_Query($args);

    global $wp_query, $paged;
    $old_query = $wp_query;
    $wp_query  = $query;
    $paged     = $current_page;

    wc_set_loop_prop('current_page',  $current_page);
    wc_set_loop_prop('is_paginated',  true);
    wc_set_loop_prop('page_template', get_page_template_slug());
    wc_set_loop_prop('per_page',      $args['posts_per_page']);
    wc_set_loop_prop('total',         $query->found_posts);
    wc_set_loop_prop('total_pages',   $query->max_num_pages);

    ob_start();

    if ($query->have_posts()) {
        woocommerce_product_loop_start();
        while ($query->have_posts()) {
            $query->the_post();
            wc_get_template_part('content', 'product');
        }
        woocommerce_product_loop_end();

        if ($query->max_num_pages > 1) {
            wc_get_template('loop/pagination.php', array(
                'total'   => $query->max_num_pages,
                'current' => max(1, $current_page),
                'base'    => esc_url_raw(add_query_arg('paged', '%#%', false)),
                'format'  => '?paged=%#%',
            ));
        }
    } else {
        echo '<div class="no-products-found"><p>Товары не найдены. Попробуйте изменить параметры фильтрации.</p></div>';
    }

    $wp_query = $old_query;
    wp_reset_postdata();

    $html = ob_get_clean();
    wp_send_json_success(array('html' => $html, 'found' => $query->found_posts));
}


add_action('wp_ajax_get_price_range',        'ajax_get_price_range');
add_action('wp_ajax_nopriv_get_price_range', 'ajax_get_price_range');

function ajax_get_price_range()
{
    global $wpdb;
    $results = $wpdb->get_row("
        SELECT MIN(CAST(meta_value AS DECIMAL(10,2))) as min_price,
               MAX(CAST(meta_value AS DECIMAL(10,2))) as max_price
        FROM {$wpdb->postmeta}
        WHERE meta_key = '_price' AND meta_value != ''
    ");
    wp_send_json_success(array('min' => floor($results->min_price), 'max' => ceil($results->max_price)));
}
/*** END AJAX: ФИЛЬТРАЦИЯ ТОВАРОВ ***/


/*** AJAX: ЗАГРУЗКА ФИЛЬТРОВ ***/

function mytheme_get_filters_for_category(int $category_id): string
{
    $cache_key = 'mytheme_filters_v2_' . $category_id;
    $cached    = get_transient($cache_key);
    if ($cached !== false) return $cached;

    global $wpdb;

    $cat_ids   = get_term_children($category_id, 'product_cat');
    $cat_ids[] = $category_id;
    $cat_ids   = array_map('intval', array_filter($cat_ids));
    $cat_in    = implode(',', $cat_ids);

    // Один SQL запрос — все атрибуты и термины текущей категории
    $rows = $wpdb->get_results(
        "SELECT DISTINCT t.term_id, t.name, t.slug, tt.taxonomy
         FROM {$wpdb->terms} t
         INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_id = t.term_id
         WHERE tt.taxonomy LIKE 'pa_%'
           AND tt.count > 0
           AND EXISTS (
               SELECT 1
               FROM {$wpdb->term_relationships} tr1
               INNER JOIN {$wpdb->term_relationships} tr2 ON tr2.object_id = tr1.object_id
               INNER JOIN {$wpdb->term_taxonomy} tt2 ON tt2.term_taxonomy_id = tr2.term_taxonomy_id
               WHERE tr1.term_taxonomy_id = tt.term_taxonomy_id
                 AND tt2.taxonomy = 'product_cat'
                 AND tt2.term_id IN ($cat_in)
           )
         ORDER BY tt.taxonomy, t.name"
    );

    if (empty($rows)) {
        set_transient($cache_key, '', 12 * HOUR_IN_SECONDS);
        return '';
    }

    // Группируем по таксономии
    $grouped = [];
    foreach ($rows as $row) {
        $grouped[$row->taxonomy][] = $row;
    }

    // Метки атрибутов
    $attribute_taxonomies = wc_get_attribute_taxonomies();
    $labels = [];
    foreach ($attribute_taxonomies as $attr) {
        $tax          = wc_attribute_taxonomy_name($attr->attribute_name);
        $labels[$tax] = $attr->attribute_label;
    }

    $output = '';
    foreach ($grouped as $taxonomy => $terms) {
        $label   = $labels[$taxonomy] ?? $taxonomy;
        $output .= '<div class="filter-group">';
        $output .= '<h6 class="filter-title">' . esc_html($label) . '</h6>';
        $output .= '<div class="filter-options">';

        foreach ($terms as $term) {
            $input_id = 'filter_' . esc_attr($taxonomy . '_' . $term->term_id);
            $output  .= '<div class="form-check">';
            $output  .= '<input class="form-check-input filter-checkbox" type="checkbox"'
                      . ' name="filter_' . esc_attr($taxonomy) . '[]"'
                      . ' value="' . esc_attr($term->slug) . '"'
                      . ' id="' . $input_id . '">';
            $output  .= '<label class="form-check-label" for="' . $input_id . '">'
                      . esc_html($term->name) . '</label>';
            $output  .= '</div>';
        }

        $output .= '</div></div>';
    }

    set_transient($cache_key, $output, 12 * HOUR_IN_SECONDS);
    return $output;
}

// Сброс кеша фильтров при изменении товара
add_action('save_post_product',          'mytheme_flush_filters_cache');
add_action('woocommerce_update_product', 'mytheme_flush_filters_cache');
function mytheme_flush_filters_cache()
{
    global $wpdb;
    $wpdb->query(
        "DELETE FROM {$wpdb->options}
         WHERE option_name LIKE '_transient_mytheme_filters_v2_%'
            OR option_name LIKE '_transient_timeout_mytheme_filters_v2_%'"
    );
}

// AJAX-обработчик загрузки фильтров
add_action('wp_ajax_load_product_filters',        'ajax_load_product_filters');
add_action('wp_ajax_nopriv_load_product_filters', 'ajax_load_product_filters');

function ajax_load_product_filters()
{
    $category_id = intval($_GET['category_id'] ?? 0);
    $html        = mytheme_get_filters_for_category($category_id);
    wp_send_json_success(array('html' => $html));
}

/*** END AJAX: ЗАГРУЗКА ФИЛЬТРОВ ***/


/*** КАСТОМНОЕ ОПИСАНИЕ КАТЕГОРИИ (TinyMCE) ***/
add_action('product_cat_edit_form_fields', 'gl_render_cat_rich_description_edit');
add_action('product_cat_add_form_fields',  'gl_render_cat_rich_description_add');
add_action('edited_product_cat',           'gl_save_cat_rich_description');
add_action('created_product_cat',          'gl_save_cat_rich_description');

function gl_render_cat_rich_description_edit($term)
{
    $value = get_term_meta($term->term_id, '_gl_cat_rich_description', true);
    ?>
    <tr class="form-field">
        <th scope="row">
            <label for="gl_cat_rich_description">Расширенное описание</label>
        </th>
        <td>
            <?php wp_editor($value, 'gl_cat_rich_description', array(
                'textarea_name' => 'gl_cat_rich_description',
                'textarea_rows' => 15,
                'media_buttons' => true,
                'teeny'         => false,
                'tinymce'       => true,
                'quicktags'     => true,
            )); ?>
            <p class="description">
                Поддерживает HTML, изображения, ссылки и форматирование.
                Используйте это поле вместо стандартного описания категории.
            </p>
        </td>
    </tr>
    <?php
}

function gl_render_cat_rich_description_add()
{
    ?>
    <div class="form-field">
        <label for="gl_cat_rich_description">Расширенное описание</label>
        <?php wp_editor('', 'gl_cat_rich_description', array(
            'textarea_name' => 'gl_cat_rich_description',
            'textarea_rows' => 15,
            'media_buttons' => true,
            'teeny'         => false,
            'tinymce'       => true,
            'quicktags'     => true,
        )); ?>
        <p class="description">Поддерживает HTML, изображения, ссылки и форматирование.</p>
    </div>
    <?php
}

function gl_save_cat_rich_description($term_id)
{
    if (!isset($_POST['gl_cat_rich_description'])) return;
    if (!current_user_can('manage_product_terms')) return;
    update_term_meta($term_id, '_gl_cat_rich_description', wp_kses_post($_POST['gl_cat_rich_description']));
}

function gl_get_cat_description($term_id = null)
{
    if (!$term_id) $term_id = get_queried_object_id();

    $depth     = 0;
    $max_depth = 10;

    while ($term_id && $depth < $max_depth) {
        $desc = get_term_meta($term_id, '_gl_cat_rich_description', true);

        if (empty($desc)) {
            $term = get_term($term_id, 'product_cat');
            if (!is_wp_error($term) && !empty($term->description)) {
                $desc = $term->description;
            }
        }

        if (!empty($desc)) return $desc;

        $term = get_term($term_id, 'product_cat');
        if (is_wp_error($term) || empty($term->parent)) break;

        $term_id = $term->parent;
        $depth++;
    }

    return '';
}

function gl_the_cat_description($term_id = null)
{
    $desc = gl_get_cat_description($term_id);
    if (!empty($desc)) {
        echo '<div class="gl-category-description">' . wp_kses_post($desc) . '</div>';
    }
}
/*** END КАСТОМНОЕ ОПИСАНИЕ КАТЕГОРИИ ***/


require_once get_template_directory() . '/inc/transliteration.php';