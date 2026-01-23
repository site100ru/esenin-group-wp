<?php
	
	/*
	 * Template Name: Материалы
	 * Template Post Type: page
	 */
	
	include 'header.php';
	
?>


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
											<a class="nav-link active" href="/materials/">Материалы со скидкой</a>
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
							<li class="nav-item"><a href="/materials/" class="nav-link active" aria-current="page">Материалы со скидкой</a></li>
						</ul>
					</div>
					<div class="col-6 right-col-footer-menu">
						<ul id="menu-main-menu-3" class="navbar-nav ms-auto mb-lg-0 text-uppercase">
							<li class="nav-item"><a href="/about-us/" class="nav-link">О нас</a></li>
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