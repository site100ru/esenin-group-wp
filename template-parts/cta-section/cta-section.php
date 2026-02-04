<!-- ==========ПРИЗЫВ К ДЕЙСТВИЮ ========== -->
<section class="section section-price bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="offset-md-6 col-md-6">

                <div class="section-title-wrapper">
                    <h2 class="product-card__title">
                        Рассчитаем стоимость материалов на проект <br> за 24 часа
                    </h2>
                    <p>Для расчета присылайте проект нам в мессенджер или через форму обратной связи на сайте.</p>
                    <div class="title-underline"></div>
                </div>

                <button class="btn btn-lg btn-corporate-color-1 section-price-button" data-bs-toggle="modal" data-bs-target="#price">Расчитать стоимость</button>

                <ul class="nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link ico-button px-0" href="whatsapp://send?phone=+79006011036"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ico-button pe-0" href="tg://resolve?domain=yeseningroup"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg"></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-circle-ico.svg"></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/max-circle-ico.svg"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="price" tabindex="-1" aria-labelledby="priceModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/price-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="priceModalLabel">Рассчитаем стоимость</h5>
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
                        <input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required="" inputmode="text">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" checked="">
                        <label class="form-check-label" for="gridCheck">
                            <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti/" target="_blank">Политике конфиденциальности.</a></small></p>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
            </div>
        </form>
    </div>
</div>
<!-- ==========ПРИЗЫВ К ДЕЙСТВИЮ ========== -->