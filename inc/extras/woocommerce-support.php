<?php
/**
 * WooCommerce Theme Support
 *
 * @link https://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 *
 * @package Chroma_Theme
 */

/* Add to functions.php...
 *
// WooCommerce Support.
require get_template_directory() . '/inc/extras/woocommerce-support.php';
 *
 */


// unhook the WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// hook to display theme wrappers
add_action('woocommerce_before_main_content', 'chroma_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'chroma_theme_wrapper_end', 10);

// Open wrappers and #main
function chroma_theme_wrapper_start() {
  echo '<div id="shop-wrapper" class="shop-page right-sidebar"><div class="container"><main id="main" class="site-main" role="main">';
}

// Close #main, insert sidebar, close wrappers
function chroma_theme_wrapper_end() {
  echo '</main>';
  do_action( 'woocommerce_sidebar' );
  '</div></div>';
}

// Hide WooCommerce support warning message
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}