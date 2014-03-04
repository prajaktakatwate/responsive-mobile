<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Responsive
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function responsive_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'responsive_jetpack_setup' );

/**
 * WooCommerce
 *
 * Unhook/Hook the WooCommerce Wrappers
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_action( 'woocommerce_before_main_content', 'responsive_woocommerce_wrapper', 10 );
add_action( 'woocommerce_after_main_content', 'responsive_woocommerce_wrapper_end', 10 );

function responsive_woocommerce_wrapper() {
	echo '<div id="content-woocommerce" class="grid col-620">';
}

function responsive_woocommerce_wrapper_end() {
	echo '</div><!-- end of #content-woocommerce -->';
}