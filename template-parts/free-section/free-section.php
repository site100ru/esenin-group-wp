<!-- ========== БЕСПЛАТНЫЕ УСЛУГИ ========== -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">Бесплатные услуги</h2>
            <div class="title-underline"></div>
        </div>

        <div class="row">
            <!-- Визуализация дома -->
            <div class="col-xl-4 col-md-6 col-12 pb-3 pb-lg-0">
                <a href="#" data-bs-toggle="modal" data-bs-target="#freeServiceModal" data-service-title="Визуализация дома с нашими материалами" class="card card-default card-free">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/free-services/free-service-1.jpg" class="card__image">
                    <div class="card__overlay">
                        <h3 class="card__title">Визуализация дома с нашими материалами</h3>
                    </div>
                </a>
            </div>

            <!-- Подбор материалов -->
            <div class="col-xl-4 col-md-6 col-12 pb-3 pb-lg-0">
                <a href="#" data-bs-toggle="modal" data-bs-target="#freeServiceModal" data-service-title="Подбор материалов и аналогичных решений по вашему проекту" class="card card-default card-free">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/free-services/free-service-2.jpg" class="card__image">
                    <div class="card__overlay">
                        <h3 class="card__title">Подбор материалов и аналогичных решений по вашему проекту</h3>
                    </div>
                </a>
            </div>

            <!-- Доставка образцов -->
            <div class="col-xl-4 col-md-6 col-12 pb-3 pb-lg-0">
                <a href="#" data-bs-toggle="modal" data-bs-target="#freeServiceModal" data-service-title="Доставка образцов на площадку" class="card card-default card-free">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/free-services/free-service-3.jpg" class="card__image">
                    <div class="card__overlay">
                        <h3 class="card__title">Доставка образцов на площадку</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Free Service Modal -->
<div class="modal fade" id="freeServiceModal" tabindex="-1" aria-labelledby="freeServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-service-mail.php" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="freeServiceModalLabel">Заявка на бесплатную услугу</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <!-- Добавить название услуги в модальное окно -->
                        <p>
                            <strong>Услуга: <span id="modalServiceTitle"></span></strong>
                        </p>
                        <p>
                            <small>Мы свяжемся с Вами в течение 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required>
                    </div>
                </div>

                <!-- Передать информацию в почту название услуги -->
                <input type="hidden" name="service_title" id="hiddenServiceTitle" value="">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-lg btn-corporate-color-1 mx-auto">Жду звонка</button>
            </div>
        </form>
    </div>
</div>
<!-- /Free Service Modal -->

<!-- Подставляет название услуги в модальное окно при его открытии -->
<script src="<?php echo get_template_directory_uri(); ?>/js/free-service-modal.js"></script>
<!-- ========== БЕСПЛАТНЫЕ УСЛУГИ ========== -->