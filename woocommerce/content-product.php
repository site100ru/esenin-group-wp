<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="col-xxl-3 col-xl-4 col-md-6 mb-4">
	<div <?php wc_product_class( 'product-card', $product ); ?>>
		<!-- Изображение -->
		<a href="<?php the_permalink(); ?>" class="product-card__image-link">
			<?php echo woocommerce_get_product_thumbnail( 'woocommerce_thumbnail', array( 'class' => 'product-card__image' ) ); ?>
		</a>

		<!-- Название -->
		<h3 class="product-card__title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>

		<!-- Характеристики (первые 3 атрибута) -->
		<?php
		$attributes = $product->get_attributes();
		
		if ( ! empty( $attributes ) ) :
			$attr_count = 0;
		?>
		<div class="table-responsive">
			<table class="table product-card__specs">
				<tbody>
					<?php
					foreach ( $attributes as $attribute ) :
						if ( $attr_count >= 3 ) break;
						
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
							<span><?php echo esc_html( $label ); ?>:</span>
						</td>
						<td class="text-end">
							<span><?php echo esc_html( $value ); ?></span>
						</td>
					</tr>
					<?php
						$attr_count++;
					endforeach;
					?>
				</tbody>
			</table>
		</div>
		<?php endif; ?>

		<!-- Цены -->
		<div class="product-card__price">
			<?php if ( $product->is_on_sale() ) : ?>
				<div class="price-old">Цена: <span><?php echo wc_price( $product->get_regular_price() ); ?></span></div>
				<div class="price-current">Цена со скидкой: <?php echo wc_price( $product->get_sale_price() ); ?></div>
			<?php else : ?>
				<div class="price-current">Цена: <?php echo wc_price( $product->get_price() ); ?></div>
			<?php endif; ?>
		</div>

		<!-- Кнопка -->
		<a href="<?php the_permalink(); ?>" class="btn btn-corporate-color-1 product-card__btn">Заказать</a>
	</div>
</div>