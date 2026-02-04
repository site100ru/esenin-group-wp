<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<!-- ========== HERO СЕКЦИЯ ========== -->
<section class="hero-product">
	<div class="container">
		<h1 class="hero-product__title"><?php the_title(); ?></h1>
	</div>
</section>

<!-- ========== ХЛЕБНЫЕ КРОШКИ ========== -->
<section class="bg-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== ТОВАР ========== -->
<section class="section product-single" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="container">
		<div class="row">
			<!-- Галерея -->
			<div class="col-lg-6">
				<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
				?>
			</div>

			<!-- Контентная часть -->
			<div class="col-lg-6">
				<div class="product-content">
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10 (removed)
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30 (removed)
					 * @hooked woocommerce_template_single_meta - 40 (removed)
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
					?>

					<!-- Цены -->
					<?php wc_get_template( 'single-product/price.php' ); ?>

					<!-- Калькулятор -->
					<div class="product-calculator">
						<div class="product-card__title calculator__title mb-3">Рассчитать количество и стоимость материалов:</div>

						<div class="calculator-row">
							<div class="calculator-field">
								<label for="unit">Ед. Изм.</label>
								<select id="unit">
									<option value="m2">м²</option>
									<option value="m">м</option>
									<option value="sht">шт</option>
								</select>
							</div>
							<div class="calculator-field">
								<label for="area">Объем/площадь:</label>
								<input type="number" id="area" value="99" min="1">
							</div>
							<div class="calculator-field">
								<label for="quantity-field">Количество:</label>
								<input type="number" id="quantity-field" value="999" min="1" disabled>
							</div>
						</div>

						<div class="calculator-result">
							<div class="calculator-result-item">
								<div class="calculator-result-label">Количество:</div>
								<div class="quantity-control">
									<button class="quantity-btn" type="button">−</button>
									<input type="number" class="quantity-input" value="999" min="1">
									<button class="quantity-btn" type="button">+</button>
								</div>
							</div>
							<div class="calculator-result-item">
								<div class="calculator-result-label">Стоимость:</div>
								<div class="calculator-result-value">16 876</div>
							</div>
						</div>

						<div class="calculator-actions">
							<button class="btn btn-corporate-color-1 product-card__btn" type="button" data-bs-toggle="modal" data-bs-target="#orderModal">Заказать</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ========== ТАБЫ ========== -->
<section class="section product-tabs">
	<div class="container">
		<ul class="nav nav-tabs justify-content-start align-items-center mb-4" id="productTabs" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">
					Описание
				</button>
			</li>
			<li class="nav-item">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ico/point.svg" alt="Декоративная точка" class="img-fluid dec">
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="characteristics-tab" data-bs-toggle="tab" data-bs-target="#characteristics" type="button" role="tab" aria-controls="characteristics" aria-selected="false" tabindex="-1">
					Характеристики
				</button>
			</li>
			<?php if ( mytheme_has_product_documents() ) : ?>
			<li class="nav-item">
				<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ico/point.svg" alt="Декоративная точка" class="img-fluid dec">
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="certificates-tab" data-bs-toggle="tab" data-bs-target="#certificates" type="button" role="tab" aria-controls="certificates" aria-selected="false" tabindex="-1">
					Сертификаты
				</button>
			</li>
			<?php endif; ?>
		</ul>
        
        <div class="d-block d-md-none text-center mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/section-menu-coursor.svg" alt="Разделительная точка">
        </div>

		<div class="tab-content" id="productTabsContent">
			<!-- Описание -->
			<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
				<?php the_content(); ?>
			</div>

			<!-- Характеристики -->
			<div class="product-card tab-pane fade" id="characteristics" role="tabpanel" aria-labelledby="characteristics-tab">
				<?php
				$attributes = $product->get_attributes();
				
				if ( ! empty( $attributes ) ) :
				?>
				<div class="table-responsive">
					<table class="table product-card__specs">
						<tbody>
							<?php
							foreach ( $attributes as $attribute ) :
								if ( $attribute->is_taxonomy() ) {
									$values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
									$value = implode( ', ', $values );
								} else {
									$value = $attribute->get_options();
									$value = is_array( $value ) ? implode( ', ', $value ) : $value;
								}
								
								if ( empty( $value ) ) {
									continue;
								}
								
								$label = wc_attribute_label( $attribute->get_name() );
							?>
							<tr>
								<td>
									<span><?php echo esc_html( $label ); ?></span>
								</td>
								<td class="text-end">
									<span><?php echo esc_html( $value ); ?></span>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<?php else : ?>
					<p>Характеристики не указаны</p>
				<?php endif; ?>
			</div>

			<!-- Сертификаты -->
			<?php if ( mytheme_has_product_documents() ) : ?>
			<div class="tab-pane fade" id="certificates" role="tabpanel" aria-labelledby="certificates-tab">
				<div class="product-documents">
					<?php
					$documents = mytheme_get_product_documents();
					if ( ! empty( $documents ) ) :
					?>
					<div class="row">
						<?php foreach ( $documents as $doc ) : ?>
						<div class="col-md-6 col-lg-4 mb-3">
							<div class="document-item">
								<a href="<?php echo esc_url( $doc['url'] ); ?>" target="_blank" class="document-link">
									<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M14 2V8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M16 13H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M16 17H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M10 9H9H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									<span><?php echo esc_html( $doc['title'] ); ?></span>
								</a>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- ========== ГАЛЕРЕЯ (МОДАЛЬНОЕ ОКНО) ========== -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	<div id="gallery-product-modal" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: block; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-inner h-100">
			<?php
				$attachment_ids = $product->get_gallery_image_ids();
				$main_image_id = $product->get_image_id();
				if ( $main_image_id ) {
					array_unshift( $attachment_ids, $main_image_id );
				}
				
				$count = false;
				foreach ( $attachment_ids as $attachment_id ) {
			?>

			<div class="carousel-item carousel-item-2 h-100<?php if ( $count == false ) { echo ' active'; $count = true; } ?>">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" class="img-fluid" loading="lazy" style="max-width: 90vw; max-height: 90vh;" alt="<?php echo esc_attr( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ?: $product->get_name() ); ?>">
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php 
		$count = count( $attachment_ids );
		if ( $count > 1 ) { ?>
			<button class="carousel-control-prev" type="button" data-bs-target="#gallery-product-modal" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Предыдущий</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#gallery-product-modal" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Следующий</span>
			</button>
		<?php } ?>
	</div>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div> <!-- #galleryWrapper -->

<!-- ========== МОДАЛЬНОЕ ОКНО ЗАКАЗА ========== -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/order-product-mail.php" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="orderModalLabel">Заказать товар</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<p>
							<strong>Товар: <span id="modalProductTitle"><?php the_title(); ?></span></strong>
						</p>

						<div class="product-card mb-0">
							<div class="table-responsive">
								<table class="table product-card__specs">
									<tbody>
										<?php if ( $product->is_on_sale() ) : ?>
										<tr>
											<td>
												<span>Стоимость:</span>
											</td>
											<td class="text-end">
												<span class="modal-old-price" id="modalProductOldPrice"><?php echo wc_price( $product->get_regular_price() ); ?></span>
											</td>
										</tr>
										<tr>
											<td>
												<span>Стоимость со скидкой:</span>
											</td>
											<td class="text-end">
												<span class="modal-discount-price" id="modalProductPrice"><?php echo wc_price( $product->get_sale_price() ); ?></span>
											</td>
										</tr>
										<?php else : ?>
										<tr>
											<td>
												<span>Стоимость:</span>
											</td>
											<td class="text-end">
												<span id="modalProductPrice"><?php echo wc_price( $product->get_price() ); ?></span>
											</td>
										</tr>
										<?php endif; ?>
										<tr>
											<td>
												<span>Количество:</span>
											</td>
											<td class="text-end">
												<span id="modalProductQuantity">1</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

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

				<input type="hidden" name="product_title" id="hiddenProductTitle" value="<?php the_title(); ?>">
				<input type="hidden" name="product_quantity" id="hiddenProductQuantity" value="1">
				<input type="hidden" name="product_price" id="hiddenProductPrice" value="<?php echo $product->get_price(); ?>">
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
				<button type="submit" class="btn btn-lg btn-corporate-color-1 mx-auto">Жду звонка</button>
			</div>
		</form>
	</div>
</div>

<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10 (removed)
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );
?>

<?php get_template_part( 'template-parts/how-buy/how-buy' ); ?>

<?php get_template_part( 'template-parts/free-section/free-section' ); ?>

<?php get_template_part( 'template-parts/cta-section/cta-section' ); ?>


<?php do_action( 'woocommerce_after_single_product' ); ?>