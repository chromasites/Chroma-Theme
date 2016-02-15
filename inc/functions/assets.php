<?php
/**
 * Chroma Theme Script & Style Assets
 *
 * @package Chroma_Theme
 */


// Enqueue styles and scripts.
function chroma_scripts() {
	wp_enqueue_style( 'chroma-style', get_stylesheet_uri() );
	wp_enqueue_style(
		'font-awesome.css',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
		array(),
		'4.5.0'
	);
	wp_enqueue_style(
		'Google Fonts',
		'https://fonts.googleapis.com/',
		array()
	);
	wp_enqueue_script(
		'jquery',
		true
	);
	wp_enqueue_script(
		'chromatheme.js',
		get_template_directory_uri() . '/js/chromatheme.min.js',
		'jquery',
		'4.0',
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'chroma_scripts' );