<?php
/**
 * Chroma Theme Setup Functions
 *
 * @package Chroma_Theme
 */

// Setup site functionality and navigation.
if ( ! function_exists( 'chroma_setup' ) ) :
	function chroma_setup() {

		// WordPress theme support.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// Real styling in visual editor.
		add_editor_style();

		// Menus registration.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'chroma' ),
			'mobile' => esc_html__( 'Mobile', 'chroma' ),
			'footer' => esc_html__( 'Footer', 'chroma' ),
		) );

		// HTML5 support.
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', ) );

		// Post formats.
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', ) );

	}
endif;
add_action( 'after_setup_theme', 'chroma_setup' );


// Sidebar registration.
function chroma_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'chroma' ),
		'id'            => 'main-sidebar',
		'description'   => 'These widgets appear on all pages and blog posts.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'chroma' ),
		'id'            => 'pages-sidebar',
		'description'   => 'These widgets appear only on pages, above widgets in the main sidebar.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'chroma' ),
		'id'            => 'posts-sidebar',
		'description'   => 'These widgets appear only on blog posts, above widgets in the main sidebar.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'chroma_widgets_init' );


// Set content width for WordPress embeds.
function chroma_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'chroma_content_width', 640 );
}
add_action( 'after_setup_theme', 'chroma_content_width', 0 );
