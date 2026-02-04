<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="product-price">
	<?php if ( $product->is_on_sale() ) : ?>
		<div class="product-price__old">
			Стоимость: <span><?php echo wc_price( $product->get_regular_price() ); ?></span>
		</div>
		<div class="product-price__current">
			Стоимость со скидкой: <span class="third"><?php echo wc_price( $product->get_sale_price() ); ?></span>
		</div>
	<?php else : ?>
		<div class="product-price__current">
			Стоимость: <span><?php echo wc_price( $product->get_price() ); ?></span>
		</div>
	<?php endif; ?>
</div>