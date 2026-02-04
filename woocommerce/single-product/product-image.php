<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */
defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();

// Добавляем основное изображение в начало массива
$main_image_id = $product->get_image_id();
if ( $main_image_id ) {
	array_unshift( $attachment_ids, $main_image_id );
}

// Если нет изображений, используем placeholder
$use_placeholder = false;
if ( empty( $attachment_ids ) ) {
	$use_placeholder = true;
	$attachment_ids = array( 0 ); // Добавляем фиктивный элемент для placeholder
}
?>

<div class="product-gallery">
	<div id="carousel-product" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
		<div class="carousel-inner h-100">
			<?php
			$slide_count = 0;
			foreach ( $attachment_ids as $attachment_id ) :
				if ( $use_placeholder ) {
					// Используем стандартную заглушку WooCommerce
					$image_url = wc_placeholder_img_src( 'woocommerce_single' );
					$image_alt = __( 'Изображение отсутствует', 'woocommerce' );
				} else {
					$image_url = wp_get_attachment_url( $attachment_id );
					$image_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
					if ( empty( $image_alt ) ) {
						$image_alt = $product->get_name();
					}
				}
			?>
			<div class="default-card carousel-item <?php echo $slide_count === 0 ? 'active' : ''; ?>" data-bs-interval="9999">
				<?php if ( ! $use_placeholder ) : ?>
				<a href="#" onclick="galleryOn('gallery-product'); return false;">
				<?php endif; ?>
					<div class="single-product-img">
						<img src="<?php echo esc_url( $image_url ); ?>" class="d-block w-100" loading="lazy" alt="<?php echo esc_attr( $image_alt ); ?>">
						<?php if ( ! $use_placeholder ) : ?>
						<div class="magnifier"></div>
						<?php endif; ?>
					</div>
				<?php if ( ! $use_placeholder ) : ?>
				</a>
				<?php endif; ?>
			</div>
			<?php
				$slide_count++;
			endforeach;
			?>
		</div>
		<?php if ( count( $attachment_ids ) > 1 && ! $use_placeholder ) : ?>
		<button class="carousel-control-prev" type="button" data-bs-target="#carousel-product" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Предыдущий</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carousel-product" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Следующий</span>
		</button>
		<?php endif; ?>
	</div>
</div>