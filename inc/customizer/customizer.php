<?php
/**
 * Chroma Theme Theme Customizer
 *
 * @package Chroma_Theme
 */


// Reload & preview customizer changes asynchronously.
function chroma_customize_preview_js() {
	wp_enqueue_script( 'chroma_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'chroma_customize_preview_js' );


// Theme customizer functions.
function chroma_customize_register( $wp_customize ) {

	// Defaults for live updating.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	require 'customizer-layout.php';
	require 'customizer-header.php';
	require 'customizer-footer.php';

}
add_action( 'customize_register', 'chroma_customize_register' );
