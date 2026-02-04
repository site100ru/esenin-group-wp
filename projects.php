<?php
	
	/*
	 * Template Name: Проекты
	 * Template Post Type: page
	 */
	
	include 'header.php';
	
?>

<!-- header-menu -->
<?php get_template_part('template-parts/header-menu/header-menu'); ?>

<!-- Home section -->
<section class="home-section_main">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col">
				<h1 class="home-section-title" style="max-width: 1200px;">Готовые и индивидуальные проекты домов бесплатно с&#160;гарантией фиксированной цены строительства и&#160;полной реализацией проекта</h1>
				<!--h2 class="home-section-subtitle text-md-center">Подзаголовок страницы</h2>
				<p class="home-section-description text-md-center">Краткое описание страницы.</p-->
				
				<!-- Home section advantages -->
				<div class="row gx-0 align-items-center">
					<div class="col-md-6 col-lg-3 mb-2 mb-md-4">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-free-excursion-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Бесплатные экскурсии</h3>
							<p class="home-section-advantage-description">На готовые дома</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-lg-3 mb-2 mb-md-4">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-wether-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Строим</h3>
							<p class="home-section-advantage-description">В любое время года</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-lg-3 mb-2 mb-md-4">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-materials-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">СП-31-105-2002</h3>
							<p class="home-section-advantage-description">В договоре</p>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<div class="row gx-0 align-items-center pb-2">
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-fix-price-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Фиксируем цену и сроки</h3>
							<p class="home-section-advantage-description">В договоре</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-ipoteka-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Ипотека от 3%</h3>
							<p class="home-section-advantage-description">До 30 лет</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-lg-3 mb-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-video-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Фото и видео с объекта</h3>
							<p class="home-section-advantage-description">Если Вы живете далеко</p>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<!-- /Home section advantages -->
				
				<a href="#quiz-sp" type="button" class="btn btn-lg btn-corporate-color-1 mt-3 mt-md-5">Рассчитать стоимость строительства</a>
			</div>
		</div>
	</div>
</section>
<!-- /Home section -->


<!-- Section Quiz -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="quiz-section py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title">Ответьте на 6 вопросов нижеи узнайте<br>предварительную смету под Ваш бюджет и параметры</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row">
					
					<!-- 1/6 -->
					<div class="col-md-8" id="question-1">
						<h3 class="quiz-section-subtitle mb-5"><span class="me-2" style="color: #A5A5A5;">1/6</span>Сколько этажей будет в Вашем доме?</h3>
						<div class="row">
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-1-1">
									<input type="radio" id="answer-1-1" name="quostion-1" class="checkbox" value="1 этаж">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">1 этаж</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-1-2">
									<input type="radio" id="answer-1-2" name="quostion-1" class="checkbox" value="1 этаж + мансарда">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">1 этаж + мансарда</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-1-3">
									<input type="radio" id="answer-1-3" name="quostion-1" class="checkbox" value="2 этажа">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3">2 этажа</h3>
							</div>
						</div>
						<div class="row">
							<div class="col mb-5 mb-md-0 text-center text-md-start" style="margin-top: 35px;">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( 'question-1' );">
							</div>
						</div>
					</div>
					
					<!-- 2/6 -->
					<div class="col-md-8" id="question-2" style="display: none;">
						<h3 class="mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите желаемую площадь дома</h3>
						<div class="row mb-5">
							<div class="col-4 col-md-2">
								<label class="option_item mb-3" for="answer-2-1" style="width: 50px;">
									<input type="radio" id="answer-2-1" name="quostion-2" class="checkbox" value="50 - 100 м2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">50 - 100 м2</h3>
							</div>
							<div class="col-4 col-md-2">
								<label class="option_item mb-3" for="answer-2-2" style="width: 50px;">
									<input type="radio" id="answer-2-2" name="quostion-2" class="checkbox" value="100 - 150 м2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">100 - 150 м2</h3>
							</div>
							<div class="col-4 col-md-2">
								<label class="option_item mb-3" for="answer-2-3" style="width: 50px;">
									<input type="radio" id="answer-2-3" name="quostion-2" class="checkbox" value="150 - 200 м2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">150 - 200 м2</h3>
							</div>
							<div class="col-4 col-md-2">
								<label class="option_item mb-3" for="answer-2-4" style="width: 50px;">
									<input type="radio" id="answer-2-4" name="quostion-2" class="checkbox" value="200 - 250 м2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">200 - 250 м2</h3>
							</div>
							<div class="col-4 col-md-2">
								<label class="option_item mb-3" for="answer-2-5" style="width: 50px;">
									<input type="radio" id="answer-2-5" name="quostion-2" class="checkbox" value="более 250 м2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">более 250 м2</h3>
							</div>
						</div>
						<div class="row">
							<div class="col" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( 'question-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( 'question-2' );">
							</div>
						</div>
					</div>
					
					<!-- 3/6 -->
					<div class="col-md-8" id="question-3" style="display: none;">
						<h3 class="mb-5"><span class="me-2" style="color: #A5A5A5;">3/6</span>Какой фундамент планируете?</h3>
						<div class="row">
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-3-1">
									<input type="radio" id="answer-3-1" name="quostion-3" class="checkbox" value="Монолитная плита">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3">Монолитная плита</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-3-2">
									<input type="radio" id="answer-3-2" name="quostion-3" class="checkbox" value="Свайно-ростверковый">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3">Свайно-ростверковый</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-3-3">
									<input type="radio" id="answer-3-3" name="quostion-3" class="checkbox" value="Свайный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3">Свайный</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-3-4">
									<input type="radio" id="answer-3-4" name="quostion-3" class="checkbox" value="Ленточный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">Ленточный</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-3-5">
									<input type="radio" id="answer-3-5" name="quostion-3" class="checkbox" value="Есть свой фундамент">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">Есть свой фундамент</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-3-6">
									<input type="radio" id="answer-3-6" name="quostion-3" class="checkbox" value="Не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/question.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3">Не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row">
							<div class="col" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( 'question-3' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( 'question-3' );">
							</div>
						</div>
					</div>
					
					<!-- 4/6 -->
					<div class="col-md-8" id="question-4" style="display: none;">
						<h3 class="mb-5"><span class="me-2" style="color: #A5A5A5;">4/6</span>Выберите тип кровли</h3>
						<div class="row">
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-4-1">
									<input type="radio" id="answer-4-1" name="quostion-4" class="checkbox" value="Профнастил">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3">Профнастил</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-4-2">
									<input type="radio" id="answer-4-2" name="quostion-4" class="checkbox" value="Металлочерепица">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3">Металлочерепица</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-4-3">
									<input type="radio" id="answer-4-3" name="quostion-4" class="checkbox" value="Мягкая кровля">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3">Мягкая кровля</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-4-4">
									<input type="radio" id="answer-4-4" name="quostion-4" class="checkbox" value="Ондулин">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">Ондулин</h3>
							</div>
							<div class="col-6 col-md-3">
								<label class="option_item mb-3" for="answer-4-5">
									<input type="radio" id="answer-4-5" name="quostion-4" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/question.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">Не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row">
							<div class="col" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( 'question-4' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( 'question-4' );">
							</div>
						</div>
					</div>
					
					<!-- 5/6 -->
					<div class="col-md-8" id="question-5" style="display: none;">
						<h3 class="mb-5"><span class="me-2" style="color: #A5A5A5;">5/6</span>В какой бюджет вы хотели бы уложиться при выполнении всех циклов работ по строительству вашего дома под ключ?</h3>
						<div class="row mb-5">
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-5-1" style="width: 50px;">
									<input type="radio" id="answer-5-1" name="quostion-5" class="checkbox" value="До 4.000.000 рублей">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-4">До 4.000.000 рублей</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-5-2" style="width: 50px;">
									<input type="radio" id="answer-5-2" name="quostion-5" class="checkbox" value="4.000.000 - 4.500.000 рублей">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-4">4.000.000 - 4.500.000 рублей</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-5-3" style="width: 50px;">
									<input type="radio" id="answer-5-3" name="quostion-5" class="checkbox" value="4.500.000 - 5.000.000 рублей">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-4">4.500.000 - 5.000.000 рублей</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-5-4" style="width: 50px;">
									<input type="radio" id="answer-5-4" name="quostion-5" class="checkbox" value="5.000.000 - 6.000.000 рублей">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">5.000.000 - 6.000.000 рублей</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-5-5" style="width: 50px;">
									<input type="radio" id="answer-5-5" name="quostion-5" class="checkbox" value="6.000.000 - 7.000.000 рублей">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">6.000.000 - 7.000.000 рублей</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-5-6" style="width: 50px;">
									<input type="radio" id="answer-5-6" name="quostion-5" class="checkbox" value="Готовы вложить в дом 7.000.000 рублей и более">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-0">Готовы вложить в дом 7.000.000 рублей и более</h3>
							</div>
						</div>
						<div class="row">
							<div class="col" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( 'question-5' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( 'question-5' );">
							</div>
						</div>
					</div>
					
					<!-- 6/6 -->
					<div class="col-md-8" id="question-6" style="display: none;">
						<h3 class="mb-5"><span class="me-2" style="color: #A5A5A5;">6/6</span>Когда хотите начать строить себе дом? (мы строим в любое время года)</h3>
						<div class="row mb-5">
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-6-1" style="width: 50px;">
									<input type="radio" id="answer-6-1" name="quostion-6" class="checkbox" value="В ближайший месяц">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-4">В ближайший месяц</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-6-2" style="width: 50px;">
									<input type="radio" id="answer-6-2" name="quostion-6" class="checkbox" value="В ближайшие 2-3 месяца">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-4">В ближайшие 2-3 месяца</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-6-3" style="width: 50px;">
									<input type="radio" id="answer-6-3" name="quostion-6" class="checkbox" value="В течение 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-4">В течение 6 месяцев</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-6-4" style="width: 50px;">
									<input type="radio" id="answer-6-4" name="quostion-6" class="checkbox" value="В течение года">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-3 mb-md-0">В течение года</h3>
							</div>
							<div class="col-4 col-md-4">
								<label class="option_item mb-3" for="answer-6-5" style="width: 50px;">
									<input type="radio" id="answer-6-5" name="quostion-6" class="checkbox" value="Интересуюсь на будущее">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" class="w-100">
									</div>
								</label>
								<h3 class="quiz-section-h3 mb-0">Интересуюсь на будущее</h3>
							</div>
						</div>
						<div class="row">
							<div class="col" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( 'question-6' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( 'question-6' );">
							</div>
						</div>
					</div>
					
					<!-- 7/6 -->
					<div class="col-md-8" id="question-7" style="display: none;">
						<h3 class="mb-5">На какой номер отправить расчет стоимости вашего дома?</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate.php">
							<div class="row">
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control form-control-lg telMask" id="exampleFormControlInput2" name="phone">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" name="name">
								</div>
							</div>
							<div class="row">
								<div class="col-md-8" style="margin-top: 45px;">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck" checked>
										<label class="form-check-label" for="gridCheck">
											<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
										</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col" style="margin-top: 45px;">
									<input type="hidden" id="answer-1" name="answer-1">
									<input type="hidden" id="answer-2" name="answer-2">
									<input type="hidden" id="answer-3" name="answer-3">
									<input type="hidden" id="answer-4" name="answer-4">
									<input type="hidden" id="answer-5" name="answer-5">
									<input type="hidden" id="answer-6" name="answer-6">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( 'question-7' );">
									<input type="submit" class="btn btn-corporate-color-1" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО КУХНЯМ -->				
					
					<div class="col-md-3">
						<div class="row justify-content-center">
							<div class="col-8">
								<h3 class="quiz-section-h3">Нужна конcультация?<span style="font-family: Gilroy-Light; font-size: 17px; display: block;">Отвечу на все вопросы</span></h3>
								<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/director-img.png" class="img-fluid mb-2">
								<h3 class="quiz-section-h3">Ерёмин Александр<span style="font-family: Gilroy-Light; font-size: 17px; display: block;">Директор компании</span></h3>
								<a href="tel:84912409111" style="color: #343a40; text-decoration: none;"><h3 class="quiz-section-h3">8 (4912) 409-111</h3></a>
								<ul class="nav mb-2 mb-lg-0">
									<li class="nav-item">
										<a class="nav-link ico-button px-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg"></a>
									</li>
									<li class="nav-item">
										<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End section Quiz -->


<!-- Portfolio projects section -->
<div id="realized-objects-sp" class="scroll-points"></div>
<section class="portfolio-projects-section bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title">Наши реализованные проекты</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-1/ready-project-1-1.jpg);" onClick="galleryOn('gallery-135','img-135-0');">
							<div class="project-container-2-footer">
								<p class="mb-0" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px;">Рязанская обл., Рязанский р-он, с. Агро-Пустынь. Общая площадь дома 160,87 м2 с террасой и крыльцом, две гардеробные, два с/у, три спальни.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-2/ready-project-2-1.jpg);" onClick="galleryOn('gallery-103','img-103-0');">
							<div class="project-container-2-footer">
								<p class="mb-0" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px;">Рязанская обл., с. Алеканово, КП «Вилланд». Общая площадь дома 152,5 м2 с террасой и крыльцом, один с/у, три спальни, одна гардеробная, бойлерная, кухня-гостиная.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-7/ready-project-7-1.jpg);" onClick="galleryOn('gallery-102','img-102-0');">
							<div class="project-container-2-footer">
								<p class="mb-0" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px;">Рязанская обл., Рязанский р-он,  с. Алеканово, КП «Вилланд». Общая площадь дома 285,9 м2 с террасой и крыльцом, два с/у, три спальни, кабинет, три гардеробные, бойлерная, кухня-гостиная, гараж.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-4/ready-project-4-1.jpg);" onClick="galleryOn('gallery-101','img-101-0');">
							<div class="project-container-2-footer">
								<p class="mb-0" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px;">Рязанская обл., Рязанский р-он, с. Агро-Пустынь. Общая площадь дома 100,79 м2, с террасой и крыльцом, один с/у, три спальни, одна кладовая, кухня-гостиная</p>
							</div>
						</div>
					</div>
					<!--div class="col-md-6 mb-4 mb-md-0">
						<div class="project-container">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-img-5.jpg" class="w-100">
							<div class="project-container-shadow">
								<div class="project-inner-container py-md-4 py-xxl-5">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-md-9 text-center">
											<p class="mb-2">Рязанская область, с. Алеканово
											<p class="mb-2">2-этажный кирпичный дом, 240 м2</p>
											<p class="mb-2">Сроки стрительства 6 месяцев</p>
											<p class="mb-2 mb-md-3">Стоимость строительства 6 500 000 руб</p>
											<button onClick="galleryOn('gallery-135','img-135-0');" class="btn btn-corporate-color-1 mt-2 mt-md-0">Смотреть</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-0">
						<div class="project-container">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-img-6.jpg" class="w-100">
							<div class="project-container-shadow">
								<div class="project-inner-container py-md-4 py-xxl-5">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-md-9 text-center">
											<p class="mb-2">Рязанская область, с. Алеканово
											<p class="mb-2">2-этажный кирпичный дом, 240 м2</p>
											<p class="mb-2">Сроки стрительства 6 месяцев</p>
											<p class="mb-2 mb-md-3">Стоимость строительства 6 500 000 руб</p>
											<button onClick="galleryOn('gallery-135','img-135-0');" class="btn btn-corporate-color-1 mt-2 mt-md-0">Смотреть</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div-->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End portfolio projects section -->


<!-- Projects section -->
<section class="projects-section bg-white py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title">Наши проекты</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row">
					
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/projects/project-3/project-3-1.png);" onClick="galleryOn('gallery-92','img-92-0');">
							<!--div class="project-container-2-header">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; top: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3>Дом «Олимп»</h3>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0"><small style="font-size: 14px;">От</small> 3,9 млн руб</h3>
										<small style="line-height: 18px;">Стоимость строительства</small>
									</li>
								</ul>
							</div-->
							<div class="project-container-2-footer">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">193 м<sup>2</sup></h3>
										<small>Площадь дома</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">1</h3>
										<small>Этаж</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">3</h3>
										<small>Комнаты</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">1</h3>
										<small>Санузел</small>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/projects/project-4/project-4-1.png);" onClick="galleryOn('gallery-77','img-77-0');">
							<!--div class="project-container-2-header">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; top: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3>Дом «Олимп»</h3>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0"><small style="font-size: 14px;">От</small> 3,9 млн руб</h3>
										<small style="line-height: 18px;">Стоимость строительства</small>
									</li>
								</ul>
							</div-->
							<div class="project-container-2-footer">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">236 м<sup>2</sup></h3>
										<small>Площадь дома</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">1</h3>
										<small>Этаж</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">5</h3>
										<small>Комнаты</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">2</h3>
										<small>Санузла</small>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/projects/project-5/project-5-1.png);" onClick="galleryOn('gallery-78','img-78-0');">
							<!--div class="project-container-2-header">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; top: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3>Дом «Олимп»</h3>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0"><small style="font-size: 14px;">От</small> 3,9 млн руб</h3>
										<small style="line-height: 18px;">Стоимость строительства</small>
									</li>
								</ul>
							</div-->
							<div class="project-container-2-footer">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">219 м<sup>2</sup></h3>
										<small>Площадь дома</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">1</h3>
										<small>Этаж</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">4</h3>
										<small>Комнаты</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">2</h3>
										<small>Санузла</small>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/projects/project-6/project-6-1.png);" onClick="galleryOn('gallery-79','img-79-0');">
							<!--div class="project-container-2-header">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; top: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3>Дом «Олимп»</h3>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0"><small style="font-size: 14px;">От</small> 3,9 млн руб</h3>
										<small style="line-height: 18px;">Стоимость строительства</small>
									</li>
								</ul>
							</div-->
							<div class="project-container-2-footer">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">177 м<sup>2</sup></h3>
										<small>Площадь дома</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">1</h3>
										<small>Этаж</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">5</h3>
										<small>Комнаты</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">2</h3>
										<small>Санузла</small>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/projects/project-7/project-7-1.png);" onClick="galleryOn('gallery-01','img-01-0');">
							<div class="project-container-2-footer">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">277 м<sup>2</sup></h3>
										<small>Площадь дома</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">1</h3>
										<small>Этаж</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">4</h3>
										<small>Комнаты</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">2</h3>
										<small>Санузла</small>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="project-container-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/projects/project-8/project-8-1.png);" onClick="galleryOn('gallery-02','img-02-0');">
							<div class="project-container-2-footer">
								<ul class="mb-0 nav justify-content-between" style="font-size: 16px; color: #FFFFFF; position: absolute; bottom: 20px; right: 20px; left: 20px; list-style: none; padding-left: 0;">
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">148 м<sup>2</sup></h3>
										<small>Площадь дома</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">1</h3>
										<small>Этаж</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">4</h3>
										<small>Комнаты</small>
									</li>
									<li style="display: inline-block;">
										<h3 class="mb-0" style="line-height: 26px;">2</h3>
										<small>Санузла</small>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End video testimonials section -->


<!-- Order section -->
<section class="order-section bg-light py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="universal-section-title mb-2">Фиксируем гарантии и обязательства в договоре</h2>
				<p class="universal-section-description">Берём на себя ответственность, которую не могу позволить себе 80% строительных организаций</p>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row align-items-md-center justify-content-center">
					<div class="col-md-5">
						<div class="row g-2 mb-5">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.svg" class="img-fluid">
							</div>
							<div class="col-10 align-self-center">
								<p class="mb-2"><strong>Гарантия фиксированной цены</strong></p>
								<p class="mb-0">После того, как договор подписан цена фиксируется.Бывали случаи, когда мы строили дешевле обещанной сметы, но никогда не выходили за смету указанную в договоре.</p>
							</div>
						</div>
						<div class="row align-items-md-center g-2 mb-5 mb-md-0">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<p class="mb-0"><strong>Гарантия на дом - 5 лет</strong></p>
							</div>
						</div>
						
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-12 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/dogovor-ico-2.png" class="img-fluid" style="min-width: 75%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End order section -->


<!-- Excursions section -->
<div id="excursions-sp" class="scroll-points"></div>
<section class="order-section bg-white py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 text-md-end">
				<h2 class="default-section-subtitle mb-2">Запишись на экскурсию по уже готовым домам или объектам в процессе строительства</h2>
				<p class="universal-section-description">Своими глазами увидите, как и в каких условиях возводятся дома.</p>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="right: 0;"></div>
				</div>
				<p class="mb-0"><strong>Запишитесь на экскурсию</strong></p>
				<p>В удобное для Вас время (это бесплатно)</p>
				<form method="post" action="">
					<div class="row">
						<div class="col">
							<div class="form-check">
								
								<label class="form-check-label" for="gridCheck">
									<p><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="/politika-konfidenczialnosti.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
								<input class="form-check-input" type="checkbox" id="gridCheck" checked>
							</div>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-md-4">
							<input type="text" class="form-control telMask w-100 mb-3 mb-md-0" id="exampleFormControlInput2" name="phone" value="Ваш телефон">
						</div>
						<div class="col-md-4">
							<input type="hidden" id="g-recaptcha-response-excursions" name="g-recaptcha-response">
							<input type="submit" class="btn btn-corporate-color-1 w-100 mb-5 mb-md-0" value="Отправить">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/order-img.jpg" class="w-100">
			</div>
		</div>
	</div>
</section>
<!-- End excursions section -->

<!-- Gallery wrapper-->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	<!-- Ready projects -->
	<div id="gallery-135" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">							
			<button id="ind-135-0" type="button" data-bs-target="#gallery-135" data-bs-slide-to="0" aria-label="Slide 3"></button>					
			<button id="ind-135-1" type="button" data-bs-target="#gallery-135" data-bs-slide-to="1" aria-label="Slide 3"></button>						
			<button id="ind-135-2" type="button" data-bs-target="#gallery-135" data-bs-slide-to="2" aria-label="Slide 3"></button>					
			<button id="ind-135-3" type="button" data-bs-target="#gallery-135" data-bs-slide-to="3" aria-label="Slide 3"></button>			
		</div>
		<div class="carousel-inner h-100">
			<div id="img-135-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-1/ready-project-1-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-135-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-1/ready-project-1-2.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-135-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-1/ready-project-1-3.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-135-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-1/ready-project-1-4.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-135" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-135" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-103" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">		
			<button id="ind-103-0" type="button" data-bs-target="#gallery-103" data-bs-slide-to="0" aria-label="Slide 3"></button>
			<button id="ind-103-1" type="button" data-bs-target="#gallery-103" data-bs-slide-to="1" aria-label="Slide 3"></button>
			<button id="ind-103-2" type="button" data-bs-target="#gallery-103" data-bs-slide-to="2" aria-label="Slide 3"></button>					
		</div>
		<div class="carousel-inner h-100">
			<div id="img-103-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-2/ready-project-2-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-103-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-2/ready-project-2-2.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-103-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-2/ready-project-2-3.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-103" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-103" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-102" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-102-0" type="button" data-bs-target="#gallery-102" data-bs-slide-to="0" aria-label="Slide 3"></button>
			<button id="ind-102-1" type="button" data-bs-target="#gallery-102" data-bs-slide-to="1" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="img-102-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-7/ready-project-7-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-102-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-7/ready-project-7-2.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-102" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-102" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-101" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">					
			<button id="ind-101-0" type="button" data-bs-target="#gallery-101" data-bs-slide-to="0" aria-label="Slide 3"></button>
			<button id="ind-101-1" type="button" data-bs-target="#gallery-101" data-bs-slide-to="1" aria-label="Slide 3"></button>
			<button id="ind-101-2" type="button" data-bs-target="#gallery-101" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="ind-101-3" type="button" data-bs-target="#gallery-101" data-bs-slide-to="3" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="img-101-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-4/ready-project-4-1.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-101-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-4/ready-project-4-2.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-101-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-4/ready-project-4-4.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-101-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-4/ready-project-4-4.jpg" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-101" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-101" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	
	
	<!-- Projects -->
	<div id="gallery-92" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-92-0" type="button" data-bs-target="#gallery-92" data-bs-slide-to="0" aria-label="Slide 1"></button>
			<button id="ind-92-1" type="button" data-bs-target="#gallery-92" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="ind-92-2" type="button" data-bs-target="#gallery-92" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="ind-92-3" type="button" data-bs-target="#gallery-92" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button id="ind-92-4" type="button" data-bs-target="#gallery-92" data-bs-slide-to="4" aria-label="Slide 5"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="img-92-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-3/project-3-1.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-92-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-3/project-3-2.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-92-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-3/project-3-3.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-92-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-3/project-3-4.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-92-4" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-3/project-3-5.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-92" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-92" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-77" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-77-0" type="button" data-bs-target="#gallery-77" data-bs-slide-to="0" aria-label="Slide 1"></button>
			<button id="ind-77-1" type="button" data-bs-target="#gallery-77" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="ind-77-2" type="button" data-bs-target="#gallery-77" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="ind-77-3" type="button" data-bs-target="#gallery-77" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button id="ind-77-4" type="button" data-bs-target="#gallery-77" data-bs-slide-to="4" aria-label="Slide 3"></button>			
		</div>
		<div class="carousel-inner h-100">
			<div id="img-77-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-4/project-4-1.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-77-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-4/project-4-2.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-77-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-4/project-4-3.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-77-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-4/project-4-4.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-77-4" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-4/project-4-5.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-77" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-77" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-78" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-78-0" type="button" data-bs-target="#gallery-78" data-bs-slide-to="0" aria-label="Slide 1"></button>
			<button id="ind-78-1" type="button" data-bs-target="#gallery-78" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="ind-78-2" type="button" data-bs-target="#gallery-78" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="ind-78-3" type="button" data-bs-target="#gallery-78" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button id="ind-78-4" type="button" data-bs-target="#gallery-78" data-bs-slide-to="4" aria-label="Slide 5"></button>			
		</div>
		<div class="carousel-inner h-100">
			<div id="img-78-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-5/project-5-1.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-78-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-5/project-5-2.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-78-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-5/project-5-3.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-78-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-5/project-5-4.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-78-4" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-5/project-5-5.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-78" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-78" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-79" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-79-0" type="button" data-bs-target="#gallery-79" data-bs-slide-to="0" aria-label="Slide 1"></button>
			<button id="ind-79-1" type="button" data-bs-target="#gallery-79" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="ind-79-2" type="button" data-bs-target="#gallery-79" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="ind-79-3" type="button" data-bs-target="#gallery-79" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button id="ind-79-4" type="button" data-bs-target="#gallery-79" data-bs-slide-to="4" aria-label="Slide 5"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="img-79-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-6/project-6-1.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-79-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-6/project-6-2.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-79-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-6/project-6-3.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-79-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-6/project-6-4.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-79-4" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-6/project-6-5.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-79" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-79" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-01" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-01-0" type="button" data-bs-target="#gallery-01" data-bs-slide-to="0" aria-label="Slide 1"></button>
			<button id="ind-01-1" type="button" data-bs-target="#gallery-01" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="ind-01-2" type="button" data-bs-target="#gallery-01" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="ind-01-3" type="button" data-bs-target="#gallery-01" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button id="ind-01-4" type="button" data-bs-target="#gallery-01" data-bs-slide-to="4" aria-label="Slide 5"></button>
			<button id="ind-01-5" type="button" data-bs-target="#gallery-01" data-bs-slide-to="5" aria-label="Slide 6"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="img-01-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-7/project-7-1.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-01-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-7/project-7-2.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-01-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-7/project-7-3.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-01-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-7/project-7-4.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-01-4" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-7/project-7-5.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-01-5" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-7/project-7-6.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-01" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-01" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div id="gallery-02" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-indicators">
			<button id="ind-02-0" type="button" data-bs-target="#gallery-02" data-bs-slide-to="0" aria-label="Slide 1"></button>
			<button id="ind-02-1" type="button" data-bs-target="#gallery-02" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button id="ind-02-2" type="button" data-bs-target="#gallery-02" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button id="ind-02-3" type="button" data-bs-target="#gallery-02" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button id="ind-02-4" type="button" data-bs-target="#gallery-02" data-bs-slide-to="4" aria-label="Slide 5"></button>
		</div>
		<div class="carousel-inner h-100">
			<div id="img-02-0" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-8/project-8-1.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-02-1" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-8/project-8-2.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-02-2" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-8/project-8-3.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-02-3" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-8/project-8-4.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
			<div id="img-02-4" class="carousel-item h-100 " data-bs-interval="999999999">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/projects/project-8/project-8-5.png" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#gallery-02" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#gallery-02" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div>


<script>
	/* Функция открытия галереи */
	function galleryOn(gal, img) {
		var gallery = gal; // Получаем ID галереи
		var image = img; // Получаем ID картинки
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		// Проверяем какие данные передаются для открытия галереи и картинки
		//alert(gallery+' '+image); 
		
		// Ready projects
		if ( gallery == "gallery-135" ) { document.getElementById("gallery-135").style.display = "block"; }
		if ( image == "img-135-0" ) { document.getElementById("img-135-0").classList.add("active"); document.getElementById("ind-135-0").classList.add("active"); }
		if ( image == "img-135-1" ) { document.getElementById("img-135-1").classList.add("active"); document.getElementById("ind-135-1").classList.add("active"); }
		if ( image == "img-135-2" ) { document.getElementById("img-135-2").classList.add("active"); document.getElementById("ind-135-2").classList.add("active"); } 
		
		if ( gallery == "gallery-103" ) { document.getElementById("gallery-103").style.display = "block"; }
		if ( image == "img-103-0" ) { document.getElementById("img-103-0").classList.add("active"); document.getElementById("ind-103-0").classList.add("active"); } 
		if ( image == "img-103-1" ) { document.getElementById("img-103-1").classList.add("active"); document.getElementById("ind-103-1").classList.add("active"); } 
		if ( image == "img-103-2" ) { document.getElementById("img-103-2").classList.add("active"); document.getElementById("ind-103-2").classList.add("active"); } 
		
		if ( gallery == "gallery-102" ) { document.getElementById("gallery-102").style.display = "block"; }
		if ( image == "img-102-0" ) { document.getElementById("img-102-0").classList.add("active"); document.getElementById("ind-102-0").classList.add("active"); } 
		if ( image == "img-102-1" ) { document.getElementById("img-102-1").classList.add("active"); document.getElementById("ind-102-1").classList.add("active"); }
		
		if ( gallery == "gallery-101" ) { document.getElementById("gallery-101").style.display = "block"; }
		if ( image == "img-101-0" ) { document.getElementById("img-101-0").classList.add("active"); document.getElementById("ind-101-0").classList.add("active"); } 
		if ( image == "img-101-1" ) { document.getElementById("img-101-1").classList.add("active"); document.getElementById("ind-101-1").classList.add("active"); } 
		if ( image == "img-101-2" ) { document.getElementById("img-101-2").classList.add("active"); document.getElementById("ind-101-2").classList.add("active"); } 
		if ( image == "img-101-3" ) { document.getElementById("img-101-3").classList.add("active"); document.getElementById("ind-101-3").classList.add("active"); }
		
		
		// Projects
		if ( gallery == "gallery-92" ) { document.getElementById("gallery-92").style.display = "block"; }
		if ( image == "img-92-0" ) { document.getElementById("img-92-0").classList.add("active"); document.getElementById("ind-92-0").classList.add("active"); }
		if ( image == "img-92-1" ) { document.getElementById("img-92-1").classList.add("active"); document.getElementById("ind-92-1").classList.add("active"); }
		if ( image == "img-92-2" ) { document.getElementById("img-92-2").classList.add("active"); document.getElementById("ind-92-2").classList.add("active"); } 
		if ( image == "img-92-3" ) { document.getElementById("img-92-3").classList.add("active"); document.getElementById("ind-92-3").classList.add("active"); } 
		if ( image == "img-92-4" ) { document.getElementById("img-92-4").classList.add("active"); document.getElementById("ind-92-4").classList.add("active"); } 
		
		if ( gallery == "gallery-77" ) { document.getElementById("gallery-77").style.display = "block"; }
		if ( image == "img-77-0" ) { document.getElementById("img-77-0").classList.add("active"); document.getElementById("ind-77-0").classList.add("active"); } 
		if ( image == "img-77-1" ) { document.getElementById("img-77-1").classList.add("active"); document.getElementById("ind-77-1").classList.add("active"); }
		if ( image == "img-77-2" ) { document.getElementById("img-77-2").classList.add("active"); document.getElementById("ind-77-2").classList.add("active"); }
		if ( image == "img-77-3" ) { document.getElementById("img-77-3").classList.add("active"); document.getElementById("ind-77-3").classList.add("active"); } 
		if ( image == "img-77-4" ) { document.getElementById("img-77-4").classList.add("active"); document.getElementById("ind-77-4").classList.add("active"); } 
		
		if ( gallery == "gallery-78" ) { document.getElementById("gallery-78").style.display = "block"; }
		if ( image == "img-78-0" ) { document.getElementById("img-78-0").classList.add("active"); document.getElementById("ind-78-0").classList.add("active"); } 
		if ( image == "img-78-1" ) { document.getElementById("img-78-1").classList.add("active"); document.getElementById("ind-78-1").classList.add("active"); }
		if ( image == "img-78-2" ) { document.getElementById("img-78-2").classList.add("active"); document.getElementById("ind-78-2").classList.add("active"); }
		if ( image == "img-78-3" ) { document.getElementById("img-78-3").classList.add("active"); document.getElementById("ind-78-3").classList.add("active"); }
		if ( image == "img-78-4" ) { document.getElementById("img-78-4").classList.add("active"); document.getElementById("ind-78-4").classList.add("active"); }
		
		if ( gallery == "gallery-79" ) { document.getElementById("gallery-79").style.display = "block"; }
		if ( image == "img-79-0" ) { document.getElementById("img-79-0").classList.add("active"); document.getElementById("ind-79-0").classList.add("active"); } 
		if ( image == "img-79-1" ) { document.getElementById("img-79-1").classList.add("active"); document.getElementById("ind-79-1").classList.add("active"); }
		if ( image == "img-79-2" ) { document.getElementById("img-79-2").classList.add("active"); document.getElementById("ind-79-2").classList.add("active"); }
		if ( image == "img-79-3" ) { document.getElementById("img-79-3").classList.add("active"); document.getElementById("ind-79-3").classList.add("active"); }
		if ( image == "img-79-4" ) { document.getElementById("img-79-4").classList.add("active"); document.getElementById("ind-79-4").classList.add("active"); }
		
		if ( gallery == "gallery-01" ) { document.getElementById("gallery-01").style.display = "block"; }
		if ( image == "img-01-0" ) { document.getElementById("img-01-0").classList.add("active"); document.getElementById("ind-01-0").classList.add("active"); } 
		if ( image == "img-01-1" ) { document.getElementById("img-01-1").classList.add("active"); document.getElementById("ind-01-1").classList.add("active"); }
		if ( image == "img-01-2" ) { document.getElementById("img-01-2").classList.add("active"); document.getElementById("ind-01-2").classList.add("active"); }
		if ( image == "img-01-3" ) { document.getElementById("img-01-3").classList.add("active"); document.getElementById("ind-01-3").classList.add("active"); }
		if ( image == "img-01-4" ) { document.getElementById("img-01-4").classList.add("active"); document.getElementById("ind-01-4").classList.add("active"); }
		if ( image == "img-01-5" ) { document.getElementById("img-01-5").classList.add("active"); document.getElementById("ind-01-5").classList.add("active"); }
		
		if ( gallery == "gallery-02" ) { document.getElementById("gallery-02").style.display = "block"; }
		if ( image == "img-02-0" ) { document.getElementById("img-02-0").classList.add("active"); document.getElementById("ind-02-0").classList.add("active"); } 
		if ( image == "img-02-1" ) { document.getElementById("img-02-1").classList.add("active"); document.getElementById("ind-02-1").classList.add("active"); }
		if ( image == "img-02-2" ) { document.getElementById("img-02-2").classList.add("active"); document.getElementById("ind-02-2").classList.add("active"); }
		if ( image == "img-02-3" ) { document.getElementById("img-02-3").classList.add("active"); document.getElementById("ind-02-3").classList.add("active"); }
		if ( image == "img-02-4" ) { document.getElementById("img-02-4").classList.add("active"); document.getElementById("ind-02-4").classList.add("active"); }
	}
	

	// Кнопка закрытия галереи
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		
		// Ready projects
		document.getElementById("gallery-135").style.display = "none";
		document.getElementById("img-135-0").classList.remove("active"); document.getElementById("ind-135-0").classList.remove("active");
		document.getElementById("img-135-1").classList.remove("active"); document.getElementById("ind-135-1").classList.remove("active");
		document.getElementById("img-135-2").classList.remove("active"); document.getElementById("ind-135-2").classList.remove("active");
		
		document.getElementById("gallery-103").style.display = "none";
		document.getElementById("img-103-0").classList.remove("active"); document.getElementById("ind-103-0").classList.remove("active");
		document.getElementById("img-103-1").classList.remove("active"); document.getElementById("ind-103-1").classList.remove("active");
		document.getElementById("img-103-2").classList.remove("active"); document.getElementById("ind-103-2").classList.remove("active");
		
		document.getElementById("gallery-102").style.display = "none";
		document.getElementById("img-102-0").classList.remove("active"); document.getElementById("ind-102-0").classList.remove("active");
		document.getElementById("img-102-1").classList.remove("active"); document.getElementById("ind-102-1").classList.remove("active");
		
		document.getElementById("gallery-101").style.display = "none";
		document.getElementById("img-101-0").classList.remove("active"); document.getElementById("ind-101-0").classList.remove("active");
		document.getElementById("img-101-1").classList.remove("active"); document.getElementById("ind-101-1").classList.remove("active");
		document.getElementById("img-101-2").classList.remove("active"); document.getElementById("ind-101-2").classList.remove("active");
		document.getElementById("img-101-3").classList.remove("active"); document.getElementById("ind-101-3").classList.remove("active");
		
		
		// Projects
		document.getElementById("gallery-92").style.display = "none";
		document.getElementById("img-92-0").classList.remove("active"); document.getElementById("ind-92-0").classList.remove("active");
		document.getElementById("img-92-1").classList.remove("active"); document.getElementById("ind-92-1").classList.remove("active");
		document.getElementById("img-92-2").classList.remove("active"); document.getElementById("ind-92-2").classList.remove("active");
		document.getElementById("img-92-3").classList.remove("active"); document.getElementById("ind-92-3").classList.remove("active");
		document.getElementById("img-92-4").classList.remove("active"); document.getElementById("ind-92-4").classList.remove("active");
		
		document.getElementById("gallery-77").style.display = "none";
		document.getElementById("img-77-0").classList.remove("active"); document.getElementById("ind-77-0").classList.remove("active");
		document.getElementById("img-77-1").classList.remove("active"); document.getElementById("ind-77-1").classList.remove("active");
		document.getElementById("img-77-2").classList.remove("active"); document.getElementById("ind-77-2").classList.remove("active");
		document.getElementById("img-77-3").classList.remove("active"); document.getElementById("ind-77-3").classList.remove("active");
		document.getElementById("img-77-4").classList.remove("active"); document.getElementById("ind-77-4").classList.remove("active");
		
		document.getElementById("gallery-78").style.display = "none";
		document.getElementById("img-78-0").classList.remove("active"); document.getElementById("ind-78-0").classList.remove("active");
		document.getElementById("img-78-1").classList.remove("active"); document.getElementById("ind-78-1").classList.remove("active");
		document.getElementById("img-78-2").classList.remove("active"); document.getElementById("ind-78-2").classList.remove("active");
		document.getElementById("img-78-3").classList.remove("active"); document.getElementById("ind-78-3").classList.remove("active");
		document.getElementById("img-78-4").classList.remove("active"); document.getElementById("ind-78-4").classList.remove("active");
		
		document.getElementById("gallery-79").style.display = "none";
		document.getElementById("img-79-0").classList.remove("active"); document.getElementById("ind-79-0").classList.remove("active");
		document.getElementById("img-79-1").classList.remove("active"); document.getElementById("ind-79-1").classList.remove("active");
		document.getElementById("img-79-2").classList.remove("active"); document.getElementById("ind-79-2").classList.remove("active");
		document.getElementById("img-79-3").classList.remove("active"); document.getElementById("ind-79-3").classList.remove("active");
		document.getElementById("img-79-4").classList.remove("active"); document.getElementById("ind-79-4").classList.remove("active");
		
		document.getElementById("gallery-01").style.display = "none";
		document.getElementById("img-01-0").classList.remove("active"); document.getElementById("ind-01-0").classList.remove("active");
		document.getElementById("img-01-1").classList.remove("active"); document.getElementById("ind-01-1").classList.remove("active");
		document.getElementById("img-01-2").classList.remove("active"); document.getElementById("ind-01-2").classList.remove("active");
		document.getElementById("img-01-3").classList.remove("active"); document.getElementById("ind-01-3").classList.remove("active");
		document.getElementById("img-01-4").classList.remove("active"); document.getElementById("ind-01-4").classList.remove("active");
		document.getElementById("img-01-5").classList.remove("active"); document.getElementById("ind-01-5").classList.remove("active");
		
		document.getElementById("gallery-02").style.display = "none";
		document.getElementById("img-02-0").classList.remove("active"); document.getElementById("ind-02-0").classList.remove("active");
		document.getElementById("img-02-1").classList.remove("active"); document.getElementById("ind-02-1").classList.remove("active");
		document.getElementById("img-02-2").classList.remove("active"); document.getElementById("ind-02-2").classList.remove("active");
		document.getElementById("img-02-3").classList.remove("active"); document.getElementById("ind-02-3").classList.remove("active");
		document.getElementById("img-02-4").classList.remove("active"); document.getElementById("ind-02-4").classList.remove("active");
	}
</script>
		
		
<?php include 'footer.php'; ?>