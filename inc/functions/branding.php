<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Chroma_Theme
 */

// Chroma Sites login branding.
function chroma_login_branding() {
    echo '<style type="text/css">h1 a { background-image:url('.get_bloginfo('template_directory').'/images/login-logo.png) !important; }</style>';
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


// Chroma Sites designed by link and branding.
if ( ! function_exists( 'chroma_designer_branding' ) ) :
function chroma_designer_branding($logo_tint = 'dark') {
	$anchor_text = 'Business Website Design by Chroma Sites';
	$title_text = 'Like this website? Click here to see how you can get a great website from Chroma Sites for your business!';
	echo '<a id="chroma-sites-brand" href="http://www.chromasites.com/" title="'.$title_text.'" target="_blank" class="'.$logo_tint.'" rel="designer">'.$anchor_text.'</a>';
}
endif;