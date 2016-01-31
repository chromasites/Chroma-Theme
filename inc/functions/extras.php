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
add_theme_support('soil-relative-urls');


// Disable inline styles for emoji.
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// Bootstrap Navwalker.
require_once('wp_bootstrap_navwalker.php');


// Body classes.
function chroma_body_classes( $classes ) {

	$classes[] = get_theme_mod('chroma_layout');

	if ( is_multi_author() ) { $classes[] = 'group-blog'; }

	if ( ! is_singular() ) { $classes[] = 'hfeed'; }



	return $classes;
}
add_filter( 'body_class', 'chroma_body_classes' );


// Chroma Sites login branding.
function chroma_login_branding() {
    echo '<style type="text/css">h1 a { background-image:url('.get_bloginfo('template_directory').'/images/chromasites-login-logo.png) !important; }</style>';
}
add_action('login_head', 'chroma_login_branding');


// Chroma Sites admin bar branding.
function chroma_adminbar_branding() {
	global $wp_admin_bar;
	$args = array(
		'id'     => 'chromasites_link',
		'title'  => __( 'Designed by Chroma Sites', 'chroma' ),
		'href'   => 'http://www.chromasites.com',
		'meta'   => array(
			'target'   => '_blank',
			'title'    => 'www.chromasites.com',
		),
	);
	$wp_admin_bar->add_menu( $args );
}
add_action( 'wp_before_admin_bar_render', 'chroma_adminbar_branding', 999 );