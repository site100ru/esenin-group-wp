<?php
	
	session_start();
	if ( isset($_SESSION['win']) ) {
		unset($_SESSION['win']);
		$_SESSION['display'] = "block";
	} else $_SESSION['display'] = "none";
	
?>


<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Строительная компания «Есенин-групп»</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/quiz.css" rel="stylesheet">
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
			k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(95629828, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
			});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/95629828" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>
	<body>
	
		<!-- Header 1 -->
		<nav id="top-menu-1" class="navbar navbar-expand-xl navbar-light d-none d-lg-block py-1">
			<div class="container">
				<!--a class="navbar-brand text-light d-none d-xxl-inline" href="#">Производство мебели</a-->
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px;">Рязань,<br>Касимовское ш., 30</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px;">Ежедневно<br>с 10:00 до 19:00</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/measurer-ico.svg" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#arhitectorModal">Консультация<br>архитектора</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<a href="tel:84912409111" id="top-menu-tel" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2">8 (4912) 409-111</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="whatsapp://send?phone=+79006011036"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="tg://resolve?domain=yeseningroup"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg"></a>
						</li>
						<!--li class="nav-item">
							<a class="nav-link ico-button pe-0" href="https://www.instagram.com/interflat_official"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-circle-ico.svg"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button" href="https://vk.com/interflat"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-circle-ico.svg"></a>
						</li-->
					</ul>
				</div>
			</div>
		</nav>
		<!-- Header 1 -->
		
		<!-- Header 2 -->
		<nav id="top-menu-2" class="navbar navbar-expand-xl navbar-dark py-2">
			<div class="container">
				<a class="navbar-brand" href="#" style="white-space: normal; margin-right: 0;">
					<div id="header-logo" style="display: flex; align-items: center; transition: .25s;">
						<div id="navbar-brand-ico">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-img.svg" id="navbar-brand-img" style="transition: .25s;">
						</div>
						<div id="navbar-brand-title" class="d-none d-md-block">
							Строительная компания<br>
							На рынке более 10 лет<br>
							Построили более 100 домов
						</div>
						<div style="clear: both;"></div>
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent2">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '
								<ul id="%1$s" class="navbar-nav mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<hr class="d-xl-none my-2" style="color: white;">
									<li class="nav-item d-xl-none">
										<a class="nav-link" href="#quiz-sp">Рассчитать стоимость</a>
									</li>
									<li class="nav-item d-xl-none">
										<a href="" class="nav-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#arhitectorModal">Консультация архитектора</a>
									</li>
									<li class="nav-item d-xl-none">
										<a href="" class="nav-link" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#callbackModal">Обратный звонок</a>
									</li>
									<hr class="d-xl-none my-2" style="color: white;">
									<li class="nav-item d-xl-none">
										<a id="top-menu-tel" class="nav-link" href="tel:84912409111">8 (4912) 409-111</a>
									</li>
									<li class="nav-item d-xl-none">
										
										<a class="ico-button me-2" style="text-decoration: none;" href="whatsapp://send?phone=+79006011036">
											<img src="'.get_template_directory_uri().'/img/ico/whatsapp-circle-ico.svg">
										</a>
										<a class="ico-button" href="tg://resolve?domain=yeseningroup">
											<img src="'.get_template_directory_uri().'/img/ico/telegram-circle-ico.svg">
										</a>
										<!--a class="ico-button pe-2" href="https://www.instagram.com/interflat_official"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/instagram-circle-ico.svg"></a>
										<a class="ico-button" href="https://vk.com/interflat"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-circle-ico.svg"></a-->
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
		<!-- /Header 2 -->