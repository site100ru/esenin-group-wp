<header class="header-white">
    <!-- Top menu header -->
    <nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block py-0 bg-light" style="border-bottom: 1px solid #d7d7d7">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav ms-auto align-items-center">
                    <?php
                    // Получаем адрес
                    $address = '';
                    if (function_exists('mytheme_get_address')) {
                        $address = mytheme_get_address();
                    }
                    if (!empty($address)):
                    ?>
                        <li class="nav-item me-1 me-xxl-3">
                            <a class="nav-link ">
                                <div class="d-flex align-items-center gap-2 ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" alt="" class="mobile-ico">
                                    <span class="address-footer">
                                        <?php echo esc_html($address); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php
                    // Получаем время работы
                    $job_time = '';
                    if (function_exists('mytheme_get_job_time')) {
                        $job_time = mytheme_get_job_time();
                    }
                    if (!empty($job_time)):
                    ?>
                        <li class="nav-item me-1 me-xxl-3">
                            <a class="nav-link ">
                                <div class="d-flex align-items-center gap-2 ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" alt="" class="mobile-ico">
                                    <span class="time-footer">
                                        <?php echo esc_html($job_time); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item me-1 me-xxl-4">
                        <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
                            <div class="d-flex align-items-center gap-2 ">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/measurer-ico.svg" alt="" class="mobile-ico">
                                <span>
                                    Бесплатный вызов<br> замерщика
                                </span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item me-1 me-xxl-3">
                        <a href="#" class="nav-link " data-bs-toggle="modal" data-bs-target="#callbackModal">
                            <div class="d-flex align-items-center gap-2 ">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" alt="" class="mobile-ico">
                                <span>Обратный звонок</span>
                            </div>
                        </a>
                    </li>

                    <?php
                    // Получаем основной телефон
                    $phone_display = '';
                    $phone_link = '';
                    if (function_exists('mytheme_get_phone')) {
                        $phone_display = mytheme_get_phone('main');
                        $phone_link = mytheme_get_phone_link('main');
                    }
                    if (!empty($phone_display)):
                    ?>
                        <li class="nav-item me-1 me-xxl-4">
                            <a class="top-menu-tel nav-link " href="tel:<?php echo esc_attr($phone_link); ?>">
                                <div class="d-flex align-items-center gap-2 ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" alt="" class="mobile-ico">
                                    <span class="phone-footer"><?php echo esc_html($phone_display); ?></span>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php
                    // Получаем ссылку на Telegram
                    $telegram = '';
                    if (function_exists('mytheme_get_telegram')) {
                        $telegram = mytheme_get_telegram();
                    }
                    if (!empty($telegram)):
                    ?>
                        <li class="nav-item">
                            <a class="nav-link ico-button" href="<?php echo esc_url($telegram); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg">
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php
                    // Получаем ссылку на WhatsApp
                    $whatsapp = '';
                    if (function_exists('mytheme_get_whatsapp')) {
                        $whatsapp = mytheme_get_whatsapp(true);
                    }
                    if (!empty($whatsapp)):
                    ?>
                        <li class="nav-item">
                            <a class="nav-link ico-button" href="<?php echo esc_url($whatsapp); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg">
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php
                    // Получаем ссылку на max
                    $max = '';
                    if (function_exists('mytheme_get_max')) {
                        $max = mytheme_get_max(true);
                    }
                    if (!empty($max)):
                    ?>
                        <li class="nav-item">
                            <a class="nav-link ico-button" href="<?php echo esc_url($max); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ico/max-circle-ico.svg">
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Top menu header  -->

    <!-- Menu header -->
    <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light bg-white shadow py-1 py-lg-0">
        <div class="container">
            <a class="navbar-brand" href="/" style="white-space: normal; margin-right: 0;">
                <div id="header-logo" style="display: flex; align-items: center; transition: .25s;">
                    <div id="navbar-brand-ico">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg" id="navbar-brand-img" style="transition: .25s;">
                    </div>
                    <div id="navbar-brand-title" class="">
                        Строительная компания<br>
                        На рынке более 10 лет<br>
                        Построили более 100 домов
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mobail-header-collapse">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'mobail-header-collapse',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '
                        <ul id="menu-main-menu" class="navbar-nav align-items-lg-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
                            <!-- Mobile menu -->
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</a>
                            </li>

                            <li class="nav-item d-lg-none mb-3">
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Бесплатный вызов замерщика</a>
                            </li>

                            <li class="nav-item d-lg-none">
                                ' . (function_exists('mytheme_get_address') && !empty(mytheme_get_address()) ? '
                                <div class="d-flex align-items-center gap-2 mobile-sliding-header-time">
                                    <img src="' . get_template_directory_uri() . '/img/ico/location-ico.svg" alt="" class="mobile-ico">
                                    <span class="address-footer">
                                        ' . esc_html(mytheme_get_address()) . '
                                    </span>
                                </div>
                                ' : '') . '

                                ' . (function_exists('mytheme_get_phone') && !empty(mytheme_get_phone('main')) ? '
                                <div class="mobile-sliding-header-time">
                                    <a class="nav-link py-2 d-flex align-items-center gap-2" href="tel:' . esc_attr(mytheme_get_phone_link('main')) . '">
                                        <img src="' . get_template_directory_uri() . '/img/ico/mobile-phone-ico.svg" alt="" class="mobile-ico">
                                        <span class="phone-footer">' . esc_html(mytheme_get_phone('main')) . '</span>
                                    </a>
                                </div>
                                ' : '') . '

                                ' . (function_exists('mytheme_get_job_time') && !empty(mytheme_get_job_time()) ? '
                                <div class="d-flex align-items-center gap-2 mobile-sliding-header-time">
                                    <img src="' . get_template_directory_uri() . '/img/ico/clock-ico.svg" alt="" class="mobile-ico">
                                    <span class="time-footer">
                                        ' . esc_html(mytheme_get_job_time()) . '
                                    </span>
                                </div>
                                ' : '') . '
                            </li>

                            <li class="nav-item d-lg-none pb-2 d-flex">
                                ' . (function_exists('mytheme_get_telegram') && !empty(mytheme_get_telegram()) ? '
                                <a class="nav-link ico-button pe-2" href="' . esc_url(mytheme_get_telegram()) . '">
                                    <img src="' . get_template_directory_uri() . '/img/ico/telegram-circle-ico.svg">
                                </a>
                                ' : '') . '
                                ' . (function_exists('mytheme_get_whatsapp') && !empty(mytheme_get_whatsapp(true)) ? '
                                <a class="nav-link ico-button pe-2" href="' . esc_url(mytheme_get_whatsapp(true)) . '">
                                    <img src="' . get_template_directory_uri() . '/img/ico/whatsapp-circle-ico.svg">
                                </a>
                                ' : '') . '
                                ' . (function_exists('mytheme_get_max') && !empty(mytheme_get_max(true)) ? '
                                <a class="nav-link ico-button pe-2" href="' . esc_url(mytheme_get_max(true)) . '">
                                    <img src="' . get_template_directory_uri() . '/img/ico/max-circle-ico.svg">
                                </a>
                                ' : '') . '
                            </li>
                            <!-- End mobile menu -->
                        </ul>
                    ',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>

        </div>
    </nav>

    <!-- /Menu header -->
</header>