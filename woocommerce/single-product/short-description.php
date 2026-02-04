<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $product;

// Получаем атрибуты товара
$attributes = $product->get_attributes();

if ( empty( $attributes ) ) {
	return;
}

$displayed_count = 0;
?>

<div class="product-content__specs">
	<?php
	foreach ( $attributes as $attribute ) :
		if ( $displayed_count >= 4 ) break;
		
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
	<div class="product-spec">
		<?php echo esc_html( $label ); ?>: <span class="product-spec__value"><?php echo esc_html( $value ); ?></span>
	</div>
	<?php
		$displayed_count++;
	endforeach;
	?>
</div>