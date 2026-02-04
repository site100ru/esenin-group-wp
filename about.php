<?php
	
	/*
	 * Template Name: О нас
	 * Template Post Type: page
	 */
	
	include 'header.php';
	
?>

<!-- header-menu -->
<?php get_template_part('template-parts/header-menu/header-menu'); ?>

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


<?php include 'footer.php'; ?>