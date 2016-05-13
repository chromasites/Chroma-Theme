<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Chroma_Theme
 */

// Theme support for Soil plugin.
add_theme_support('soil-clean-up');
add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-jquery-cdn');
// add_theme_support('soil-relative-urls'); bad for SEO


// Disable inline styles for emoji.
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// Body classes.
function chroma_body_classes( $classes ) {

	$classes[] = get_theme_mod('chroma_layout');

	if ( get_theme_mod('fixed_navbar') == 'checked' ) { $classes[] = 'fixed-navbar-top'; }

	if ( is_multi_author() ) { $classes[] = 'group-blog'; }

	if ( ! is_singular() ) { $classes[] = 'hfeed'; }

	return $classes;
}
add_filter( 'body_class', 'chroma_body_classes' );


// Bootstrap Navwalker.
require_once('wp_bootstrap_navwalker.php');