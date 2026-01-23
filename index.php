<?php
	
/**
 * Template Name: Главная
 * Template Post Type: page
 */

include 'header.php';
	 
?>


<!-- Home section -->
<section class="home-section_main">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col">
				<h1 class="home-section-title">Строим дома из&#160;газоблока и&#160;кирпича в&#160;Рязани и области от&#160;4&#160;000&#160;000&#160;руб с&#160;бесплатным проектом</h1>
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
							<h3 class="text-light mb-0 home-section-advantage-title">Ипотека от 6%</h3>
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
								<div class="col" style="margin-top: 15px;">
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
										<a class="nav-link ico-button px-0" href="whatsapp://send?phone=+79006011036"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-circle-ico.svg"></a>
									</li>
									<li class="nav-item">
										<a class="nav-link ico-button pe-0" href="tg://resolve?domain=yeseningroup"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-circle-ico.svg"></a>
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


<!-- Video testimonials section -->
<div id="testimonials-sp" class="scroll-points"></div>
<section class="video-testimonials-section bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title">Некоторые отзывы о нас наших клиентов</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row">
					<!--div class="col-md-6 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/IMG_7701.MOV"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div-->
					<div class="col-md-6 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/IMG_7702.MOV"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div>
					
					<div class="col-md-6 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/IMG_7705.MOV"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div>
					<div class="col-md-6 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/IMG_7711.MOV"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div>
					<div class="col-md-6 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/IMG_8204.MOV"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div>
					
					
					<div class="col-6 col-md-4 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/IMG_7709.MOV"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div>
					<div class="col-6 col-md-4 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/ivan-villand.mov"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div>
					<div class="col-md-4 mb-4">
						<video style="width: 100%; overflow: hidden;" playsinline="playsinline" loop="loop" poster="" controls="">
							<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
							<source  src="<?php echo get_template_directory_uri(); ?>/videos/pasha-villand.mov"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
							<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
						</video>
					</div>
				</div>
			</div><!-- /.col -->
		</div>
	</div>
</section>
<!-- /End video testimonials section -->


<section class="video-testimonials-section bg-light pb-5" style="overflow: hidden;">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="universal-section-title">Наши объекты на карте</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="map"></div>						
						
	<!-- Принимаем данные из API Yandex Map и записываем в БД -->
	<!-- API Yandex Map -->
	<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript">
		ymaps.ready(init);
		function init() {

			var myMap = new ymaps.Map("map", {
				center: [54.63626311536477,39.7483274753672],
				zoom: 10
			});

			myMap.geoObjects
			
			.add(new ymaps.Placemark( [54.63007648916526,39.988224249659176], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Кирпичный дом 250 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., с. Алеканово</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-1/1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+
						'<div class="carousel-item">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-1/2.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+
						'<div class="carousel-item">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-1/3.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																	
					'</div>'+
					'<button class="carousel-control-prev" type="button" data-bs-target="#carousel-108" data-bs-slide="prev">'+
						'<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
						'<span class="visually-hidden">Previous</span>'+
					'</button>'+
					'<button class="carousel-control-next" type="button" data-bs-target="#carousel-108" data-bs-slide="next">'+
						'<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
						'<span class="visually-hidden">Next</span>'+
					'</button>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Кирпичный дом 250 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			.add(new ymaps.Placemark( [54.5135556685841,39.58044264870703], { balloonContentHeader: '<div style="max-width: 250px;">Кирпичный дом 280 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., д. Рожок</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-2/1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+
						'<div class="carousel-item">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-2/2.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+
						'<div class="carousel-item">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-2/3.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																	
					'</div>'+
					'<button class="carousel-control-prev" type="button" data-bs-target="#carousel-108" data-bs-slide="prev">'+
						'<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
						'<span class="visually-hidden">Previous</span>'+
					'</button>'+
					'<button class="carousel-control-next" type="button" data-bs-target="#carousel-108" data-bs-slide="next">'+
						'<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
						'<span class="visually-hidden">Next</span>'+
					'</button>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Кирпичный дом 280 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			.add(new ymaps.Placemark( [54.76018189238514,39.786350470362294], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Кирпичный дом 220 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., с. Агро-Пустынь</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-3/1.png" class="d-block w-100 rounded" alt="">'+
						'</div>'+
						'<div class="carousel-item">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-3/2.png" class="d-block w-100 rounded" alt="">'+
						'</div>'+
						'<div class="carousel-item">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/p-3/3.png" class="d-block w-100 rounded" alt="">'+
						'</div>'+																	
					'</div>'+
					'<button class="carousel-control-prev" type="button" data-bs-target="#carousel-108" data-bs-slide="prev">'+
						'<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
						'<span class="visually-hidden">Previous</span>'+
					'</button>'+
					'<button class="carousel-control-next" type="button" data-bs-target="#carousel-108" data-bs-slide="next">'+
						'<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
						'<span class="visually-hidden">Next</span>'+
					'</button>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Кирпичный дом 220 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			/* Новые */
			
			.add(new ymaps.Placemark( [54.750257824234126,39.79217352777563], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Дом площадью 160 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., с. Агро-Пустынь</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-1/ready-project-1-1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																
					'</div>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Дом площадью 160 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			.add(new ymaps.Placemark( [54.623930524569346,39.99842467218482], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Дом площадью 152 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., с. Алеканово, КП «Вилланд»</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-2/ready-project-2-1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																
					'</div>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Дом площадью 152 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			.add(new ymaps.Placemark( [54.54207832208644,39.527242140565626], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Дом площадью 236 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., Рязанский р-он, д. Сергеевка</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-3/ready-project-3-1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																
					'</div>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Дом площадью 236 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			.add(new ymaps.Placemark( [54.74680440739743,39.815451613179945], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Дом площадью 101 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., Рязанский р-он, с. Агро-Пустынь</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-4/ready-project-4-1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																
					'</div>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Дом площадью 191 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			.add(new ymaps.Placemark( [54.80525479623262,39.842342100531674], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Дом площадью 278 кв.м</div>', balloonContentBody:
				'<div class="mb-2">г. Рязань, поселок Солотча</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-5/ready-project-5-1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																
					'</div>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Дом площадью 278 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
			
			.add(new ymaps.Placemark( [54.53823505539588,39.536230307834806], {  iconContent: '2500', balloonContentHeader: '<div style="max-width: 250px;">Дом площадью 148 кв.м</div>', balloonContentBody:
				'<div class="mb-2">Рязанская обл., Рязанский р-он, д. Сергеевка</div>'+
				'<div id="carousel-108" class="carousel slide mb-2" data-bs-ride="carousel" data-bs-interval="9999999999" style="max-width: 250px;">'+
					'<div class="carousel-inner mb-3 mb-md-0">'+
						'<div class="carousel-item active">'+
							'<img src="<?php echo get_template_directory_uri(); ?>/img/ready-projects/ready-project-6/ready-project-6-1.jpg" class="d-block w-100 rounded" alt="">'+
						'</div>'+																
					'</div>'+
				'</div>',
				//'Цена: от 2500 руб/чел/сутки<br>'+
				//'Сайт: <a href="www.skazka-tur.ru">www.skazka-tur.ru</a><br>'+
				//'Телефон: +7 (903) 348-14-15<br>'+
				//'Рейтинг в Яндексе: 4.7 '+
				//'<a href="https://yandex.ru/profile/130977876735" target="blank">Читать отзывы</a><br>'+
				//'<a href="https://астраханские-базы.рф/single-base.php?base_id=108">На страницу базы</a>',
				hintContent: 'Дом площадью 148 кв.м'
			} , { iconLayout: 'default#image', iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/logo-location.svg', iconImageSize: [35, 46], iconImageOffset: [-17, -46] } ) )
								
		}
	</script>
</section>
<!-- /End video testimonials section -->


<section class="director-section bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title">Построим Ваш дом так, как строили бы для себя</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				
				<div class="row">
					<div class="col-12 d-md-none text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/director-img.png" class="img-fluid mb-5">
					</div>
					<div class="col-12 offset-md-5 col-md-6 mb-4">
						<h3 class="quiz-section-h3 mb-3">Здравствуйте! Меня зовут Еремин Александр.</h3>
						<p>Я директор компании СК Есенин-групп.</p>
						<p>СК Есенин-групп – строительная компания полного цикла. Более 10 лет занимаемся индивидуальным строительством частных домов и коттеджей под ключ. На данный момент построено более 100 объектов в Рязани и области.</p>
						<p>Строим дома как на собственных земельных участках, так и на участках заказчиков. Успешно справляемся с любыми типами домов и с самыми нестандартными задачами, используя профессиональные ресурсы и сильную команду со свежим взглядом на загородное строительство.</p>
						<h3 class="quiz-section-h3 mb-4">Вы можете лично поговоритьс Александром и задать ему вопросы:</h3>
						<button class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#directorModal">Задать вопрос Александру</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End video testimonials section -->


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
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_excursion.php">
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
							<input type="text" class="form-control telMask w-100 mb-3 mb-md-0" id="exampleFormControlInput2" name="phone" value="Ваш телефон" required>
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
<!-- Excursions section -->


<!-- Order section -->
<section class="order-section bg-light py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="universal-section-title mb-2">Вы будете спокойны за ход строительства</h2>
				<p class="universal-section-description">Так, как сможете контролировать процесс строительства удаленно.</p>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				
				<div class="row justify-content-center">
					<div class="col-md-5">
						<div class="row align-items-center" style="height: 150px;">
							<div class="col-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/prorab.png" class="img-fluid">
							</div>
							<div class="col-8">
								<p>Вы можете в любой момент все время строительства нам писать и звонить</p>
							</div>
						</div>
						<div class="row align-items-center" style="height: 150px;">
							<div class="col-4 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/phone_icon.png" class="img-fluid">
							</div>
							<div class="col-8 align-self-center">
								<p>Фото и видеоотчеты от нас в WhatsApp по запросу</p>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-4" style="display: flex!important; align-items: center;">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/big-phone.png" class="img-fluid">
							</div>
							<div class="col-8">
								<div class="row align-items-center">
									<div class="col-12" style="height: 150px; display: flex!important; align-items: center;">
										<p>Мы позвоним вам только в случае крайней необходимости или чтобы пригласить на приемку работ.</p>
									</div>
									<div class="col-12" style="height: 150px; display: flex!important; align-items: center;">
										<p>Весь процесс построен так, чтобы вы не тратили время и нервы на постоянный контроль.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End order section -->


<!-- Ipoteka section -->
<section class="ipoteka-section bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="offset-md-4 col-md-8">
				<h2 class="default-section-subtitle">Получите ипотеку по выгодной ставке от 6% без залога и поручительства в одном из наших банков-партнеров:</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>			
				<div class="row align-items-center">
					<div class="col-6 col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/sber-logo.png" class="img-fluid mb-3 mb-md-5">
					</div>
					<div class="col-6 col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vtb-logo.png" class="img-fluid mb-3 mb-md-5">
					</div>
					<div class="col-6 col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/rosselhoz-logo.png" class="img-fluid mb-5">
					</div>
					<div class="col-6 col-md-3">
						<img src="https://esenin-group.ru/wp-content/uploads/2025/04/dom-rf.png" class="img-fluid mb-5">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-4 mb-md-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/check-ico.svg" class="img-fluid">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-dark mb-0 home-section-advantage-title">99% одобрение заявки в течение недели</h3>
							<p class="text-dark home-section-advantage-description">Подготовим все документы и подадим заявку в 1 или несколько банков-партнеров.</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/check-ico.svg" class="img-fluid">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-dark mb-0 home-section-advantage-title">Возможно оформление в зачет вторичного жилья</h3>
							<p class="text-dark home-section-advantage-description">Наш юрист сопровождает вас на всех этапах сделки, готовит все необходимые документы.</p>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<button class="btn btn-lg btn-corporate-color-1 mt-5" data-bs-toggle="modal" data-bs-target="#ipotekaModal">Консультация по ипотеке</button>
			</div>
		</div>
	</div>
</section>
<!-- /End ipoteka section -->


<!-- Order section -->
<section class="order-section bg-light py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="universal-section-title mb-0">Вы получите полностью готовый для жизни дом</h2>
				<h2 class="default-section-subtitle" style="line-height: 80%; margin-bottom: 15px;">Останется только собрать чемоданы и заселиться</h2>
				<p class="universal-section-description">С момента заключения договора все вопросы ме берем на себя.</p>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row justify-content-around text-center">
					<div class="col-md-3 mb-4 mb-md-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/dogovor-ico.png" class="img-fluid mb-3">
						<p class="text-start">Помогаем с оформлением документов на всех этапах: от выбора участка до сдачи в эксплуатацию гос. органам</p>
					</div>
					<div class="col-md-3 mb-4 mb-md-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/blocks-ico.png" class="img-fluid mb-3">
						<p class="text-start">Подберем материалы по ГОСТу 31359-2007 под ваш бюджет</p>
					</div>
					<div class="col-md-3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/razetka-ico.png" class="img-fluid mb-3">
						<p class="text-start">Проведем все необходимые инженерные системы и даже подключим Интернет и ТВ</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End order section -->


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
											<a class="nav-link active" href="/" style="transition: .25s;">Строительство</a>
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
											<a class="nav-link" href="/about-us/">О нас</a>
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
							<li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Строительство</a></li>
							<li class="nav-item"><a href="/проекты/" class="nav-link">Проекты</a></li>
							<li class="nav-item"><a href="/материалы/" class="nav-link">Материалы со скидкой</a></li>
						</ul>
					</div>
					<div class="col-6 right-col-footer-menu">
						<ul id="menu-main-menu-3" class="navbar-nav ms-auto mb-lg-0 text-uppercase">
							<li class="nav-item"><a href="/о-нас/" class="nav-link">О нас</a></li>
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