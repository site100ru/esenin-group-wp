<?php
	
	/*
	 * Template Name: Материалы
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
				<h1 class="home-section-title" style="max-width: 1200px;">Материалы со скидкой</h1>
				<!--h2 class="home-section-subtitle text-md-center">Подзаголовок страницы</h2>
				<p class="home-section-description text-md-center">Краткое описание страницы.</p-->
				
				<!--a href="#quiz-sp" type="button" class="btn btn-lg btn-corporate-color-1 mt-3 mt-md-5">Рассчитать стоимость строительства</a-->
			</div>
		</div>
	</div>
</section>
<!-- /Home section -->


<!-- Portfolio projects section -->
<section class="materials-section bg-white py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="universal-section-title">Материалы со скидкой</h2>
				<div class="section-title-decoration mb-5">
					<div class="section-title-decoration__element_line" style="left: 0;"></div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="product-card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
							<h3 class="product-card-title" style="height: 50px;">Бетон (м<sup>2</sup>)</h3>
							<table class="table">
								<tbody>
									<!--<tr>
										<td><span></span></td>
										<td class="text-end"><span></span></td>
									</tr>-->
									<tr>
										<td><span>Цена, руб:</span></td>
										<td class="text-end"><span class="price-discount">5000 руб</span></td>
									</tr>
									<tr>
										<td><span>Цена со скидкой, руб:</span></td>
										<td class="text-end"><span class="price-discount">5000 руб</span></td>
									</tr>
								</tbody>
							</table>
							<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/products/keramblock.png" class="img-fluid mb-3">
							<h3 class="product-card-title" style="height: 50px;">Керамический блок - 10.7НФ 380х250х219</h3>
							<table class="table">
								<tbody>
									<!--<tr>
										<td><span>Размер, мм:</span></td>
										<td class="text-end"><span></span></td>
									</tr>-->
									<tr>
										<td><span>Цена, руб:</span></td>
										<td class="text-end"><span class="price-discount">от 99 руб</span></td>
									</tr>
									<tr>
										<td><span>Цена со скидкой, руб:</span></td>
										<td class="text-end"><span class="price-discount">от 99 руб</span></td>
									</tr>
								</tbody>
							</table>
							<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/products/ruchform.png" class="img-fluid mb-3">
							<h3 class="product-card-title" style="height: 50px;">Кирпич ручной формовки</h3>
							<table class="table">
								<tbody>
									<!--<tr>
										<td><span></span></td>
										<td class="text-end"><span></span></td>
									</tr>-->
									<tr>
										<td><span>Цена, руб:</span></td>
										<td class="text-end"><span class="price-discount">от 65 руб</span></td>
									</tr>
									<tr>
										<td><span>Цена со скидкой, руб:</span></td>
										<td class="text-end"><span class="price-discount">от 65 руб</span></td>
									</tr>
								</tbody>
							</table>
							<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product-card">
							<img src="<?php echo get_template_directory_uri(); ?>/img/products/stroitel.png" class="img-fluid mb-3">
							<h3 class="product-card-title" style="height: 50px;">Строительный кирпич формат 1НФ</h3>
							<table class="table">
								<tbody>
									<!--<tr>
										<td><span></span></td>
										<td class="text-end"><span></span></td>
									</tr>-->
									<tr>
										<td><span>Цена, руб:</span></td>
										<td class="text-end"><span class="price-discount">от 17 руб</span></td>
									</tr>
									<tr>
										<td><span>Цена со скидкой, руб:</span></td>
										<td class="text-end"><span class="price-discount">от 17 руб</span></td>
									</tr>
								</tbody>
							</table>
							<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
						</div>
					</div>
				<div class="col-md-3">
					<div class="product-card">
						<img src="<?php echo get_template_directory_uri(); ?>/img/products/oblicovoch.png" class="img-fluid mb-3">
						<h3 class="product-card-title" style="height: 50px;">Облицовочный кирпич</h3>
						<table class="table">
							<tbody>
								<!--<tr>
									<td><span></span></td>
									<td class="text-end"><span></span></td>
								</tr>-->
								<tr>
									<td><span>Цена, руб:</span></td>
									<td class="text-end"><span class="price-discount">от 37 руб</span></td>
								</tr>
								<tr>
									<td><span>Цена со скидкой, руб:</span></td>
									<td class="text-end"><span class="price-discount">от 37 руб</span></td>
								</tr>
							</tbody>
						</table>
						<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-card">
						<img src="<?php echo get_template_directory_uri(); ?>/img/products/metallocherepica.png" class="img-fluid mb-3">
						<h3 class="product-card-title" style="height: 50px;">Металлочерепица - 0.5мм (м<sup>2</sup>)</h3>
						<table class="table">
							<tbody>
								<!--<tr>
									<td><span>Размер, мм:</span></td>
									<td class="text-end"><span></span></td>
								</tr>-->
								<tr>
									<td><span>Цена, руб:</span></td>
									<td class="text-end"><span class="price-discount">679 руб</span></td>
								</tr>
								<tr>
									<td><span>Цена со скидкой, руб:</span></td>
									<td class="text-end"><span class="price-discount">679 руб</span></td>
								</tr>
							</tbody>
						</table>
						<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
					</div>
				</div>
			</div>	
					<!--<div class="col-md-3">
						<ul class="nav flex-column " id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<li><a class="nav-link active my-0 py-0 mx-0 px-0" id="v-1-tab" data-bs-toggle="pill" data-bs-target="#v-1" role="tab" aria-controls="v-1" aria-selected="true">Газоселикатные блоки</a></li>
							<li><a class="nav-link my-0 py-0 mx-0 px-0" id="v-2-tab" data-bs-toggle="pill" data-bs-target="#v-2" role="tab" aria-controls="v-2" aria-selected="false">Газобетонные блоки</a></li>
							<li><a class="nav-link my-0 py-0 mx-0 px-0" id="v-3-tab" data-bs-toggle="pill" data-bs-target="#v-3" role="tab" aria-controls="v-3" aria-selected="false">Керамзитобетонные блоки</a></li>
							<li><a class="nav-link my-0 py-0 mx-0 px-0" id="v-4-tab" data-bs-toggle="pill" data-bs-target="#v-4" role="tab" aria-controls="v-4" aria-selected="false">Пескоцементные блоки</a></li>
							<li><a class="nav-link my-0 py-0 mx-0 px-0" id="v-5-tab" data-bs-toggle="pill" data-bs-target="#v-5" role="tab" aria-controls="v-5" aria-selected="false">Керамические блоки</a></li>
							<li><a class="nav-link my-0 py-0 mx-0 px-0" id="v-6-tab" data-bs-toggle="pill" data-bs-target="#v-6" role="tab" aria-controls="v-6" aria-selected="false">Армированные перемычки</a></li>
						</ul>-->
						<!--ul class="nav mb-5 mb-md-0">
							<li><a href="#">Газоселикатные блоки</a></li>
							<li><a href="#">Газобетонные блоки</a></li>
							<li><a href="#">Керамзитобетонные блоки</a></li>
							<li><a href="#">Пескоцементные блоки</a></li>
							<li><a href="">Керамические блоки</a></li>
							<li><a href="#">Армированные перемычки</a></li>
						</ul-->
					<!--</div>-->
					<!--<div class="col-md-9">
						<div class="row">-->
						
							<!-- Tab content -->
							<!--<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-1" role="tabpanel" aria-labelledby="v-1-tab">-->
								<!--Первый таб -->
									<!--<div class="row">-->
										
									<!--/Первый таб -->
								<!--</div>
								<div class="tab-pane fade" id="v-2" role="tabpanel" aria-labelledby="v-2-tab">-->
								<!--Второй таб -->
									<!--<div class="row">
										
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.png" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>-->
										<!--<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
									</div>-->
								<!-- /Второй таб -->
								<!--</div>-->
								<!--<div class="tab-pane fade" id="v-3" role="tabpanel" aria-labelledby="v-3-tab">-->
									<!--Третий таб -->
									<!--<div class="row">												
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
									</div>-->
								<!-- /Третий таб -->
								<!--</div>-->
								<!--<div class="tab-pane fade" id="v-4" role="tabpanel" aria-labelledby="v-4-tab">-->
									<!--Четвертый таб -->
									<!--<div class="row">
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
									</div>-->
								<!-- /Четвертый таб -->
								<!--</div>
								<div class="tab-pane fade" id="v-5" role="tabpanel" aria-labelledby="v-5-tab">-->
									<!--Пятый таб -->
									<!--<div class="row">
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
									</div>-->
								<!-- /Пятый таб -->
								<!--</div>
								<div class="tab-pane fade" id="v-6" role="tabpanel" aria-labelledby="v-6-tab">-->
									<!--Шестой таб -->
									<!--<div class="row">
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="product-card">
												<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
												<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
												<table class="table">
													<tbody>
														<tr>
															<td><span>Размер, мм:</span></td>
															<td class="text-end"><span>625х250х200</span></td>
														</tr>
														<tr>
															<td><span>Цена, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
														<tr>
															<td><span>Цена со скидкой, руб:</span></td>
															<td class="text-end"><span class="price-discount">600 руб</span></td>
														</tr>
													</tbody>
												</table>
												<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#zakazkModal">Заказать</a>
											</div>
										</div>
									</div>-->
								<!-- /Шестой таб -->
								<!--</div>
							</div>-->
							<!-- Tab content -->
						
						
						
							<!--div class="col-md-4">
								<div class="product-card">
									<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
									<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
									<table class="table">
										<tbody>
											<tr>
												<td><span>Размер, мм:</span></td>
												<td class="text-end"><span>625х250х200</span></td>
											</tr>
											<tr>
												<td><span>Цена, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
											<tr>
												<td><span>Цена со скидкой, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
										</tbody>
									</table>
									<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Заказать</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="product-card">
									<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
									<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
									<table class="table">
										<tbody>
											<tr>
												<td><span>Размер, мм:</span></td>
												<td class="text-end"><span>625х250х200</span></td>
											</tr>
											<tr>
												<td><span>Цена, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
											<tr>
												<td><span>Цена со скидкой, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
										</tbody>
									</table>
									<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Заказать</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="product-card">
									<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
									<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
									<table class="table">
										<tbody>
											<tr>
												<td><span>Размер, мм:</span></td>
												<td class="text-end"><span>625х250х200</span></td>
											</tr>
											<tr>
												<td><span>Цена, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
											<tr>
												<td><span>Цена со скидкой, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
										</tbody>
									</table>
									<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Заказать</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="product-card">
									<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
									<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
									<table class="table">
										<tbody>
											<tr>
												<td><span>Размер, мм:</span></td>
												<td class="text-end"><span>625х250х200</span></td>
											</tr>
											<tr>
												<td><span>Цена, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
											<tr>
												<td><span>Цена со скидкой, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
										</tbody>
									</table>
									<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Заказать</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="product-card">
									<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
									<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
									<table class="table">
										<tbody>
											<tr>
												<td><span>Размер, мм:</span></td>
												<td class="text-end"><span>625х250х200</span></td>
											</tr>
											<tr>
												<td><span>Цена, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
											<tr>
												<td><span>Цена со скидкой, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
										</tbody>
									</table>
									<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Заказать</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="product-card">
									<img src="<?php echo get_template_directory_uri(); ?>/img/products/product-img-1.jpg" class="img-fluid mb-3">
									<h3 class="product-card-title">Блок газоселекатный стеновой 625х250х200</h3>
									<table class="table">
										<tbody>
											<tr>
												<td><span>Размер, мм:</span></td>
												<td class="text-end"><span>625х250х200</span></td>
											</tr>
											<tr>
												<td><span>Цена, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
											<tr>
												<td><span>Цена со скидкой, руб:</span></td>
												<td class="text-end"><span class="price-discount">600 руб</span></td>
											</tr>
										</tbody>
									</table>
									<a href="#quiz-sp" type="button" class="btn btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#callbackModal">Заказать</a>
								</div>
							</div-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End portfolio projects section -->


<!-- Zakaz Modal -->
<div class="modal fade" id="zakazkModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="callback-mail.php" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="callbackModalLabel">Заказать материал</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<p><small>Мы свяжемся с Вами в теченее 10 минут и ответим на все вопросы! Для заказа введите Ваше имя и телефон.</small></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 mb-md-0">
						<input type="text" name="name" class="form-control" placeholder="Ваше имя">
					</div>
					<div class="col-md-6">
						<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
			</div>
		</form>
	</div>
</div>
<!-- /Zakaz Modal -->
		
		
<?php include 'footer.php'; ?>