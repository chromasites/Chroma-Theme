<?php
/**
 * The template for displaying all single posts.
 *
 * @package Chroma_Theme
 */

get_header(); 
	
	$blog_single_layout = get_theme_mod( 'blog_post_layout' );

	get_template_part( 'template-parts/single', $blog_single_layout );


get_footer();
