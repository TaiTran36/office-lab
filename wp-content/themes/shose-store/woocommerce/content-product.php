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
<li <?php wc_product_class( 'wr-25 d-flex flex-column align-items-center justify-content-center h-350 mt-20 text-align-center box-shadow', $product ); ?>>
	<?php
	do_action( 'woocommerce_before_shop_loop_item' );

    echo woocommerce_get_product_thumbnail(); ?>
    <div class="product-info px-2">
        <?php
        $list = wp_get_post_terms( $product->get_id(), 'product_cat', array( "fields" => "names" ) );
        echo '<div class="product-name my-1">' . $product->name . '</div>';
        echo '<div class="product-price my-1">' . $product->get_price_html() . '</div>';
        ?>
    </div>

    <?php do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
