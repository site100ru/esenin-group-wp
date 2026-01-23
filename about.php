<?php
	
	/*
	 * Template Name: О нас
	 * Template Post Type: page
	 */
	
	include 'header.php';
	
?>


<!-- Home section -->
<section class="home-section_regular">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col">
				<h1 class="home-section-title" style="max-width: 1200px;">О нас</h1>
				<!--h2 class="home-section-subtitle text-md-center">Подзаголовок страницы</h2>
				<p class="home-section-description text-md-center">Краткое описание страницы.</p-->
				
				<!---a href="#quiz-sp" type="button" class="btn btn-lg btn-corporate-color-1 mt-3 mt-md-5">Рассчитать стоимость строительства</a-->
			</div>
		</div>
	</div>
</section>
<!-- /Home section -->











<!-- Order section -->
<section class="order-section bg-white py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="universal-section-title mb-2">О компании</h2>
				<!--p class="universal-section-description">Берём на себя ответственность, которую не могу позволить себе 80% строительных организаций</p-->
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<p>СК Есенин-групп – строительная компания полного цикла. Более 10 лет занимаемся индивидуальным строительством частных домов и коттеджей под ключ. На данный момент построено более 100 объектов в Рязани и области.</p>
				<p>Строим дома как на собственных земельных участках, так и на участках заказчиков. Успешно справляемся с любыми типами домов и с самыми нестандартными задачами, используя профессиональные ресурсы и сильную команду со свежим взглядом на загородное строительство.</p>
			</div>
		</div>
	</div>
</section>
<!-- End order section -->


<!-- Team section -->
<section class="team-section bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title mb-2">Команда супергероев</h2>
				<p class="universal-section-description">Познакомьтесь с людьми, которые будут делать Вашпроект</p>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row">
					<div class="col-md-3 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/persona-1.jpg" class="w-100 mb-3">
						<h3 class="product-card-title">Еремин Александр</h3>
						<p>Директор компании</p>
					</div>
					<div class="col-md-3 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/persona-2.jpg" class="w-100 mb-3">
						<h3 class="product-card-title">Лукин Илья</h3>
						<p>Директор по строительству</p>
					</div>
					<!--div class="col-md-3 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/persona-3.jpg" class="w-100 mb-3">
						<h3 class="product-card-title">Рахманкулов Ринат</h3>
						<p>Старший менеджер</p>
					</div-->
					<div class="col-md-3 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/team/persona-4.jpg" class="w-100 mb-3">
						<h3 class="product-card-title">Маслова Юлия</h3>
						<p>Главный архитектор</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End team section -->


<!-- Office section -->
<section class="team-section bg-white py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title mb-2">Наш офис</h2>
				<!--p class="universal-section-description">Познакомьтесь с людьми, которые будут делать Вашпроект</p-->
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/office/office-1.jpg" class="w-100 mb-3">
					</div>
					<div class="col-md-6 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/office/office-2.jpg" class="w-100 mb-3">
					</div>
					<div class="col-md-6 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/office/office-4.jpg" class="w-100 mb-3">
					</div>
					<div class="col-md-6 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/office/office-6.jpg" class="w-100 mb-3">
					</div>
					<div class="col-md-6 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/office/office-3.jpg" class="w-100 mb-3">
					</div>
					<div class="col-md-6 mb-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/office/office-5.jpg" class="w-100 mb-3">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End office section -->


<!-- Contacts -->
<div id="contacts-sp"></div>
<section class="contacts-section">
	<div class="container py-5">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-12 pt-2 pb-4">
				<nav id="contacts-menu-1" class="navbar-light">
					
					<!-- Desktop version -->
					<div class="row h-100 justify-content-center align-items-center d-none d-lg-flex">
						<div class="col-3">
							<a class="navbar-brand" href="#" style="white-space: normal; margin-right: 0;">
								<div id="header-logo" style="display: flex; align-items: center; transition: .25s;">
									<div id="navbar-brand-ico">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-img.svg" id="navbar-brand-img" style="transition: .25s;">
									</div>
									<div id="navbar-brand-title" class="d-block" style="color: #e1e1e1;">
										Строительная компания<br>
										На рынке более 10 лет<br>
										Построили более 100 домов
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</div>
						<div class="col-7">
							<nav id="contacts-menu-2" class="navbar navbar-expand-xl navbar-light">
								<div class="collapse navbar-collapse">
									<ul class="navbar-nav m-auto mb-2 mb-lg-0">
										<li class="nav-item">
											<a class="nav-link" href="/" style="transition: .25s;">Строительство</a>
										</li>
										<li class="nav-item d-none d-xl-inline">
											<div class="nav-link px-1" style="display: flex; align-items: center; height: 100%;">
												<div style="width: 6px; height: 6px; border-radius: 3px; background: #B22000;"></div>
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="/projects/">Проекты</a>
										</li>
										<li class="nav-item d-none d-xl-inline">
											<div class="nav-link px-1" style="display: flex; align-items: center; height: 100%;">
												<div style="width: 6px; height: 6px; border-radius: 3px; background: #B22000;"></div>
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="/materials/">Материалы со скидкой</a>
										</li>
										<li class="nav-item d-none d-xl-inline">
											<div class="nav-link px-1" style="display: flex; align-items: center; height: 100%;">
												<div style="width: 6px; height: 6px; border-radius: 3px; background: #B22000;"></div>
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="/about-us/">О нас</a>
										</li>
										<li class="nav-item d-none d-xl-inline">
											<div class="nav-link px-1" style="display: flex; align-items: center; height: 100%;">
												<div style="width: 6px; height: 6px; border-radius: 3px; background: #B22000;"></div>
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#contacts-sp">Контакты</a>
										</li>
										<!-- Mobile menu -->
										<li class="nav-item d-xl-none">
											<a class="nav-link" href="tel:‪84912409111">8 (4912) 409-111</a>
										</li>
										<li class="nav-item d-xl-none">
											<a class="nav-link" href="#‬" data-bs-toggle="modal" data-bs-target="#callbackModal">‪Обратный звонок‬</a>
										</li>
										<li class="nav-item d-xl-none mb-2">
											<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg"></a>
											<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg"></a>
											<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-circle-ico.svg"></a>
											<a class="ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-circle-ico.svg"></a>
										</li>
										<!-- End mobile menu -->
									</ul>
								</div>
							</nav>
						</div>
						<div class="col-2 text-end">
							<a href="tel:‪84912409111‬" class="contacts-phone text-light">‪8 (4912) 409-111</a>
						</div>
					</div><!-- End Desktop version -->
					
					<!-- Mobail version -->
					<div class="row d-lg-none">
						<div class="col-12 mb-3">
							<a class="navbar-brand" href="#" style="white-space: normal; margin-right: 0;">
								<div id="header-logo" style="display: flex; align-items: center; transition: .25s;">
									<div id="navbar-brand-ico">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-img.svg" id="navbar-brand-img" style="transition: .25s; width: 91px;">
									</div>
									<div id="navbar-brand-title" class="d-block" style="color: #e1e1e1;">
										Строительная компания<br>
										На рынке более 10 лет<br>
										Построили более 100 домов
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</div>
						<div class="col-12">
							<ul class="nav mb-2">
								<li class="nav-item d-inline-block">
									<a href="#" class="nav-link ps-0">
										<div class="block-mobail-contacts-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
										</div>
										<div class="block-mobail-contacts-right">
											<span>Рязань, Касимовское ш., д. 30</span>
										</div>
										<div style="clear: both;"></div>
									</a>
								</li>
								<li class="nav-item d-inline-block">
									<a href="#" class="nav-link ps-0">
										<div class="block-mobail-contacts-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg">
										</div>
										<div class="block-mobail-contacts-right">
											<span>Ежедневно с 10:00 до 19:00</span>
										</div>
										<div style="clear: both;"></div>
									</a>
								</li>
								<li class="nav-item d-inline-block">
									<a href="#" class="nav-link ps-0">
										<div class="block-mobail-contacts-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/measurer-ico.svg">
										</div>
										<div class="block-mobail-contacts-right">
											<span>Бесплатный вызов замерщика</span>
										</div>
										<div style="clear: both;"></div>
									</a>
								</li>
								<li class="nav-item d-inline-block">
									<a href="#" class="nav-link ps-0">
										<div class="block-mobail-contacts-left">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
										</div>
										<div class="block-mobail-contacts-right">
											<span data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</span>
										</div>
										<div style="clear: both;"></div>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-12 pt-4">
							<a href="tel:‪84912409111‬" class="contacts-phone text-light">‪8 <span>(4912)</span> 41-92-92</a>
						</div>
					</div><!-- END Mobail version -->
				</nav>
			</div>
		</div>
		
		
		<div class="row d-none d-lg-block mb-3">
			<div class="col-md-12">
				<ul class="nav justify-content-center align-items-center">
					<li class="nav-item d-inline-block">
						<span class="nav-link ps-0">
							<div class="block-mobail-contacts-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
							</div>
							<div class="block-mobail-contacts-right">
								Рязань, Касимовское ш., д. 30
							</div>
							<div style="clear: both;"></div>
						</span>
					</li>
					<li class="nav-item d-inline-block">
						<span class="nav-link ps-0">
							<div class="block-mobail-contacts-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg">
							</div>
							<div class="block-mobail-contacts-right">
								Ежедневно с 10:00 до 19:000
							</div>
							<div style="clear: both;"></div>
						</span>
					</li>
					<li class="nav-item d-inline-block">
						<span class="nav-link ps-0" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#arhitectorModal">
							<div class="block-mobail-contacts-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/measurer-ico.svg">
							</div>
							<div class="block-mobail-contacts-right">
								Консультация архитектора
							</div>
							<div style="clear: both;"></div>
						</span>
					</li>
					<li class="nav-item d-inline-block">
						<span class="nav-link ps-0" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#callbackModal">
							<div class="block-mobail-contacts-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
							</div>
							<div class="block-mobail-contacts-right">
								Обратный звонок
							</div>
							<div style="clear: both;"></div>
						</span>
					</li>
				</ul>
			</div>
		</div>
		
		
		<div class="row justify-content-center pt-3">
			<div class="col-md-8">
				<ul class="nav justify-content-md-center mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link ico-button px-0" href="whatsapp://send?phone=+79006011036"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button pe-0" href="tg://resolve?domain=yeseningroup"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg"></a>
					</li>
					<!--li class="nav-item">
						<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-circle-ico.svg"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link ico-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-circle-ico.svg"></a>
					</li-->
				</ul>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-8 pt-4 pt-lg-2">
				<div class="row d-lg-none justify-content-center">
					<div class="col-6 left-col-footer-menu">
						<ul id="menu-main-menu-2" class="navbar-nav ms-auto mb-lg-0 text-uppercase">
							<li class="nav-item"><a href="/" class="nav-link">Строительство</a></li>
							<li class="nav-item"><a href="/projects/" class="nav-link">Проекты</a></li>
							<li class="nav-item"><a href="/materials/" class="nav-link">Материалы со скидкой</a></li>
						</ul>
					</div>
					<div class="col-6 right-col-footer-menu">
						<ul id="menu-main-menu-3" class="navbar-nav ms-auto mb-lg-0 text-uppercase">
							<li class="nav-item"><a href="/about-us/" class="nav-link active" aria-current="page">О нас</a></li>
							<li class="nav-item"><a href="#contacts-sp" class="nav-link">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- container -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div id="company-in-footer">©2024 Строительная компания «Есенин-групп»</div>
					<div><small>ИНН 6230124756</small></div>
					<div><small>ИП Макарова Ирина Николаевна</small></div>
					<div><small>ИНН 622300757250</small></div>
					<div><small>Цены на сайте не являются публичной офертой. Носят исключительно информационный характер.</small></div>
					<div>
						<small>
							<a href="/politika-konfidenczialnosti/" class="text-light" style="font-size: .875em;" target="_blank">
								Политика конфиденциальности
							</a>
							<span class="d-none d-md-inline">|</span>
							<br class="d-block d-md-none">
							<a href="/soglasie-na-obrabotku-personalnyh-dannyh.pdf" class="text-light" style="font-size: .875em;" target="_blank">
								Согласие на обработку данных
							</a>
						</small>
					</div>
				</div>
			</div>
		</div>
	</footer>
</section>
<!-- /Contacts -->

<img src="<?php echo get_template_directory_uri(); ?>/img/ico/right-feedback-mobail-phone.png" id="right-feedback-mobail-phone" data-bs-toggle="modal" data-bs-target="#callbackModal">
<a href="#quiz-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/right-feedback-calculator.png" id="right-feedback-calculator"></a>
<img src="<?php echo get_template_directory_uri(); ?>/img/ico/right-feedback-dogovor.png" id="right-feedback-dogovor" data-bs-toggle="modal" data-bs-target="#arhitectorModal">
		
		
<?php include 'footer.php'; ?>