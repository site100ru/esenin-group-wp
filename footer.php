    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/right-feedback-mobail-phone.png" id="right-feedback-mobail-phone" data-bs-toggle="modal" data-bs-target="#callbackModal">
    <a href="#quiz-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/right-feedback-calculator.png" id="right-feedback-calculator"></a>
    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/right-feedback-dogovor.png" id="right-feedback-dogovor" data-bs-toggle="modal" data-bs-target="#arhitectorModal">



    <!-- Contacts -->
    <div id="contacts-sp"></div>
    <section class="footer-contacts contacts-section">
        <div class="container pt-5 pb-0">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 pt-2 pb-4 mb-2">
                    <nav id="contacts-menu-1" class="navbar-light">

                        <!-- Desktop version -->
                        <div class="row h-100 justify-content-center align-items-center d-none d-xl-flex">
                            <div class="col-4 col-xl-3">
                                <a class="navbar-brand" href="#" style="white-space: normal; margin-right: 0;">
                                    <div id="header-logo" style="display: flex; align-items: center; transition: .25s;">
                                        <div id="navbar-brand-ico">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-img.svg" id="navbar-brand-img" style="transition: .25s;">
                                        </div>
                                        <div id="navbar-brand-title" class="d-block" style="color: #e1e1e1;">
                                            Строительная&nbsp;компания<br>
                                            На рынке более 10 лет<br>
                                            Построили более 100&nbsp;домов
                                        </div>
                                        <div style="clear: both;"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-xl-7">
                                <nav id="contacts-menu-2" class="navbar navbar-expand-xl navbar-light">
                                    <div class="collapse navbar-collapse">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'contacts-desktop-menu',
                                            'container' => false,
                                            'menu_class' => '',
                                            'fallback_cb' => '__return_false',
                                            'items_wrap' => '<ul class="navbar-nav m-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                                            'depth' => 2,
                                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                                        ));
                                        ?>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-2 text-end">
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
                                    <a href="tel:<?php echo esc_attr($phone_link); ?>" class="contacts-phone d-flex justify-content-end align-items-center">
                                        <div class="d-flex align-items-center gap-3 lh-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" alt="">
                                            <span class="phone-footer"><?php echo esc_html($phone_display); ?></span>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div><!-- End Desktop version -->

                        <!-- Mobail version -->
                        <div class="row d-xl-none">
                            <div class="col-12 mb-3">
                                <a class="navbar-brand" href="/" style="white-space: normal; margin-right: 0;">
                                    <div id="header-logo" style="display: flex; align-items: center; transition: .25s;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-img.svg" class="me-3" id="navbar-brand-img" style="transition: .25s; width: 91px;">
                                        <div id="navbar-brand-title" class="d-block" style="color: #e1e1e1;">
                                            Строительная&nbsp;компания<br>
                                            На рынке более 10 лет<br>
                                            Построили более 100 домов
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div><!-- END Mobail version -->
                    </nav>
                </div>
            </div>

            <div class="row  mb-3">
                <div class="col-xl-3 pb-0 pb-xl-3">
                    <ul class="nav justify-content-start  flex-column">
                        <?php
                        // Получаем адрес
                        $address = '';
                        if (function_exists('mytheme_get_address')) {
                            $address = mytheme_get_address();
                        }
                        if (!empty($address)):
                        ?>
                            <li class="nav-item me-1 me-lg-2">
                                <a class="nav-link">
                                    <div class="d-flex align-items-center gap-3 lh-1">
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
                            <li class="nav-item me-1 me-lg-2">
                                <a class="nav-link">
                                    <div class="d-flex align-items-center gap-3 lh-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" alt="" class="mobile-ico">
                                        <span class="time-footer">
                                            <?php echo esc_html($job_time); ?>
                                        </span>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item me-1 me-lg-2">
                            <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
                                <div class="d-flex align-items-center gap-3 lh-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/measurer-ico.svg" alt="" class="mobile-ico">
                                    <span>
                                        Бесплатный вызов замерщика
                                    </span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item me-1 me-lg-2">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#callbackModal">
                                <div class="d-flex align-items-center gap-3 lh-1">
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
                            <li class="nav-item me-1 me-lg-2">
                                <a href="tel:<?php echo esc_attr($phone_link); ?>" class="nav-link contacts-phone d-flex align-items-center d-block d-xl-none">
                                    <div class="d-flex align-items-center gap-3 lh-1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" alt="" class="mobile-ico">
                                        <span class="phone-footer"><?php echo esc_html($phone_display); ?></span>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <ul class="nav mt-4">
                        <?php
                        // Получаем ссылку на WhatsApp
                        $whatsapp = '';
                        if (function_exists('mytheme_get_whatsapp')) {
                            $whatsapp = mytheme_get_whatsapp(true);
                        }
                        if (!empty($whatsapp)):
                        ?>
                            <li class="nav-item">
                                <a class="nav-link ico-button pe-3" href="<?php echo esc_url($whatsapp); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg"></a>
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
                                <a class="nav-link ico-button pe-3" href="<?php echo esc_url($telegram); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg"></a>
                            </li>
                        <?php endif; ?>

                        <?php
                        // Получаем ссылку на vk
                        $vk = '';
                        if (function_exists('mytheme_get_vk')) {
                            $vk = mytheme_get_vk(true);
                        }
                        if (!empty($vk)):
                        ?>
                            <li class="nav-item">
                                <a class="nav-link ico-button pe-3" href="<?php echo esc_url($vk); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-circle-ico.svg">
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

                <div class="col-6 d-block d-xl-none">
                    <nav class="navbar navbar-expand-xl navbar-light">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'contacts-desktop-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul class="nav justify-content-start  flex-column %2$s">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </nav>
                </div>

                <div class="col-md-6 col-xl-3 pb-md-3">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-1',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul class="nav justify-content-start  flex-column %2$s">%3$s</ul>',
                        'depth' => 1,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>

                <div class="col-md-6 col-xl-3 pb-md-3">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-2',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul class="nav justify-content-start  flex-column %2$s">%3$s</ul>',
                        'depth' => 1,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>

                <div class="col-md-6 col-xl-3 pb-md-3">
                    <ul class="nav justify-content-start  flex-column">
                        <li class="nav-item me-1 me-lg-2">
                            <span class="nav-link">
                                ИП Макарова Ирина Николаевна
                            </span>
                        </li>

                        <li class="nav-item me-1 me-lg-2">
                            <span class="nav-link">
                                ИНН 6230124756
                            </span>
                        </li>

                        <li class="nav-item me-1 me-lg-2">
                            <span class="nav-link">
                                ИНН 622300757250
                            </span>
                        </li>

                        <li class="nav-item me-1 me-lg-2">
                            <span class="nav-link">
                                Цены на сайте не являются публичной офертой, а носят исключительно информационный характер.
                            </span>
                        </li>

                        <li class="nav-item me-1 me-lg-2">
                            <a class="nav-link text-decoration-underline" href="#" target="_blank">
                                Политика конфиденциальности
                            </a>
                        </li>

                        <li class="nav-item me-1 me-lg-2">
                            <a class="nav-link text-decoration-underline" href="#" target="_blank">
                                Согласие на обработку данных
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


        </div><!-- container -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col text-start text-md-center">
                        <div id="company-in-footer">©2026 Строительная компания «Есенин-групп»</div>
                        <div id="im-in-footer">Создание, продвижение и поддержка сайтов: <a href="https://site100.ru/">site<span>100</span>.ru</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!-- /Contacts -->

    <!-- Всплывающая форма Политики конфиденциальности -->
    <div class="popup-form" id="popupForm">
        <div class="form-content container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-9">
                    <p class="mb-md-0">На на нашем сайте используются cookie-файлы, в том числе сервисов веб-аналитики. Используя сайт, вы соглашаетесь на <a href="/soglasie-na-obrabotku-personalnyh-dannyh.pdf" target="_blank">обработку персональных данных</a> при помощи cookie-файлов. Подробнее об обработке персональных данных вы можете узнать в <a href="/politika-konfidenczialnosti/" target="_blank">Политика конфиденциальности.</a></p>
                </div>
                <div class="col-md-1 text-md-end">
                    <button id="closeBtn" class="btn btn-corporate-color-1">Понятно</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const popupForm = document.getElementById('popupForm');
            const closeBtn = document.getElementById('closeBtn');

            // Проверяем нужно ли показывать форму
            function shouldShowPopup() {
                const lastClosed = localStorage.getItem('popupLastClosed');

                // Если пользователь никогда не закрывал форму
                if (!lastClosed) return true;

                // Если прошло более 1 часа (3600000 миллисекунд) с последнего закрытия
                const now = new Date().getTime();
                return (now - parseInt(lastClosed)) > 3600000;
            }

            // Показываем форму если нужно
            if (shouldShowPopup()) {
                setTimeout(() => {
                    popupForm.classList.add('active');
                }, 3000);
            }

            // Функция закрытия формы
            function closePopup() {
                popupForm.classList.remove('active');

                // Сохраняем время закрытия
                localStorage.setItem('popupLastClosed', new Date().getTime().toString());
            }

            // Закрытие по кнопке
            closeBtn.addEventListener('click', closePopup);
        });
    </script>
    <!-- /Всплывающая форма Политики конфиденциальности -->


    <!-- Callback Modal -->
    <div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_callback.php" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p><small>Мы свяжемся с Вами в теченее 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: center;">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label" for="gridCheck">
                                <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
                        <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /Callback Modal -->

    <div class="modal fade" id="calculatePriceWithDownloadModal" tabindex="-1" aria-labelledby="calculatePrice" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_measurer.php" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="calculatePrice">Консультация замерщика</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p><small>Наш замерщик свяжемся с Вами в ближайшее время и проконсультирует по всем вопросам абсолютно бесплатно! Для консультации с замерщиком оставьте Ваше имя и телефон.</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required="" inputmode="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: center;">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked="">
                            <label class="form-check-label" for="gridCheck">
                                <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" id="g-recaptcha-response-architector" name="g-recaptcha-response" value="0cAFcWeA4eZShAsXY2a0yXX4OV3rMR-H18qCe_AAgYP2WQA3-KER5dap1E-e5v0jPjfSFzvVhPYXIZfoLvhMf3bQr97PLHXtalBi7Z_asaM8zdVtTWbyPJ7d1LgKc_x6TjVj6HLlUYsTljGA1Mo8i9JHpUrj5pqoKyWlkF1_6b4ZyMv-ZEYb1zrJ4BWyyC6Gey081friQDiAO6Y_KLO2hzTPs1dxN4MgJlMHFex8IS-6EEXwU7X48pf4_LrUApVDElxV9q9Jd77NDr_9HdSTrY-EhmjypFv5mv8vk2gvZkw7VJFoWGG2l9Ii7DXaiVN4ioYzNsmCgvr7HqCFBZEGs90qkObMJI7YG944XWi3lPUELqL3EPYrTIhjLtVhyl-Fi10F5DLSlAGYVFxP45p4GMWOIkr6Z97yUwPrp1NWEK90pfhwzKXNSMFL2Dzi8SxUUjrh54Jhq8lwWUjypvR73TR6IzZNWGFMgF6IuIPurgfHK2_q1jVtoIRW--UBFI_w9Sf2S-aTXBk0wXtvByEBwgguyyNPqTqd2vf1CT7rFVD63Ui2m7ptHPy4PWWzHDSBKQMUpmjWOFLuG3lPnsekKubxtu9gxYB4--gPkuc-XrEg6smz6JRuyrrhqJIbvg37NGP9EnObrAZEjbRhfRaUJkKfc7ud_GwIhjNHyOWsByTJLoF9nY4GQN3o6Dgth3kqEGxntYKqxGqkU6dyYtQCoz2e1KpQ6qEGY53vMtjPncqVLM8xhMoFJadzgjiMy4COV9bpvW0IRK5dDomlSk5AvifcSUNieJQUrdJN95ZSI87FQsaclMflY_Tq_RqD_RZR2M2F17yAD1rq8N_f4Y2T4ucGdXifF3W3ruLdWFyNG0ewd7bw6fUxHc_jaPGZ8jBFrZXiImBD0gvh4gqs1XgO6dJrD-B9oggiB2n_u87HRaKyuqKNxU9noD8VPOv9WPSR0lzMDd_8SR2Wmofnvn1gnIW67dSoL4rNUAkodWkYn0GUKM2llIN6t7Dhr6NANvf3dWDMGHN9bfS64LxwRlBkYXVaNSnGRaGC0j6AGukzNfDDai5oHlp8Z2RRpqHze4rwjiEe1DR5wH2TMyJcW9MXu2dWE-n-Vi-Y9SuuYuB8BSEoavwnt97dajGF56GawjXv-tPpwzwu1y5sxnCenv0uL7s7ZlV-4-6lHByVXp3Q13vUGUGyDdOyXBus0e_xrAaOC-8bGlduMzYA5JpbppTCxIN7W1q-KnOI4Dlxp0-oocPHrO-x87s8wsiMYV83PjMm18ut0QDgOtd_tNog3U2jthjf-lGi9O7RQ6SP_5kqiPgY7MYyB29yxRouBUVvZBdAdC6ZAHWR5tX62UO2tylVGGd2oAS4vPNHiYEdt0cRd2w1kckXheLUzmYkwPP5Mwrh7UvkTSFmZCv4bVcOuff941oEQkAZpR23LrKUQar_Nk4zt3TtjudFEqLiElcKfeVkc8oxzvqKqSaiVc_D7_8paze27IbofQMiSpg97oqLX29bZyscZJPp30Wv1YwWpIYmmPEoviNX6gw4AmHl5dW1BhwBDWhpD3djrX82dVH_0I4cSffvb8VYGiJFZAAaos_pVNWinUdFSq3b09yCyYabzye4i2BFGGhoNGBB7XHtJjBPD5U5RVAKXFDZHYoDwGXiTFNe47wRc-WQp4">
                        <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Architector Modal -->
    <div class="modal fade" id="arhitectorModal" tabindex="-1" aria-labelledby="arhitectorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_architector.php" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="arhitectorModalLabel">Консультация архитектора</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p><small>Наш архитектор свяжемся с Вами в ближайшее время и проконсультирует по всем вопросам абсолютно бесплатно! Для консультации с архитектором оставьте Ваше имя и телефон.</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: center;">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label" for="gridCheck">
                                <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" id="g-recaptcha-response-architector" name="g-recaptcha-response">
                        <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /Architector Modal -->


    <!-- Ipoteka Modal -->
    <div class="modal fade" id="ipotekaModal" tabindex="-1" aria-labelledby="ipotekaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_ipoteka.php" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ipotekaModalLabel">Консультация по ипотеке</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <p><small>Наш специалист по ипотеке свяжемся с Вами в ближайшее время и проконсультирует по всем вопросам! Для консультации со специалистом оставьте Ваше имя и телефон.</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label" for="gridCheck">
                                <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" id="g-recaptcha-response-ipoteka" name="g-recaptcha-response">
                        <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /Ipoteka Modal -->


    <!-- Director Modal -->
    <div class="modal fade" id="directorModal" tabindex="-1" aria-labelledby="directorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_director.php" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="directorModalLabel">Задать вопрос Александру</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!--div class="row">
                    <div class="col">
                        <p><small>Наш архитектор свяжемся с Вами в ближайшее время и проконсультирует по всем вопросам абсолютно бесплатно! Для консультации с архитектором оставьте Ваше имя и телефон.</small></p>
                    </div>
                </div-->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3 mb-md-0">
                            <textarea type="text" name="mes" class="form-control" placeholder="Ваш вопрос" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                            <label class="form-check-label" for="gridCheck">
                                <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" id="g-recaptcha-response-director" name="g-recaptcha-response">
                        <button type="submit" class="btn btn-corporate-color-1 mx-auto">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /Director Modal -->


    <!-- Показываем сообщение об успешной отправки -->
    <div style="display: <?php echo $_SESSION['display']; ?>;" onclick="closeBackground();">
        <div id="background-msg" style="display: <?php echo $_SESSION['display']; ?>;"></div>
        <div id="message">
            <?php echo $_SESSION['recaptcha'];
            unset($_SESSION['recaptcha']); ?>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    <!-- Theme scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/quiz.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/single-product.js"></script>

    <!-- Telephone number mask -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
    <script>
        var telMask = document.getElementsByClassName("telMask");
        var im = new Inputmask("+7(999)999-99-99");
        im.mask(telMask);
    </script>


    <!-- Убираем сообщение об успешной отправки -->
    <script>
        function closeBackground() {
            document.getElementById('background-msg').style.display = 'none';
            document.getElementById('message').style.display = 'none';
        }
    </script>


    <!-- reCaptcha v3 New from Google -->
    <script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {
                action: 'action_name'
            }).then(function(token) {
                document.getElementById('g-recaptcha-response-director').value = token;
                document.getElementById('g-recaptcha-response-ipoteka').value = token;
                document.getElementById('g-recaptcha-response-architector').value = token;
                document.getElementById('g-recaptcha-response-callback').value = token;
                if (document.getElementById('g-recaptcha-response-excursions')) {
                    document.getElementById('g-recaptcha-response-excursions').value = token;
                }
            });
        });
    </script>
    <?php wp_footer(); ?>
    </body>

    </html>