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
		'font-awesome',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
		array(),
		'4.7.0'
	);
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic',
		array(),
		''
	);
	wp_enqueue_script(
		'chromatheme',
		get_template_directory_uri() . '/js/chromatheme.min.js',
		['jquery'],
		'4.1',
		false
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'chroma_scripts' );