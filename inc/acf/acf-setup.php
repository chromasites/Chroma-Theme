<?php
/**
 * Chroma Theme Static Advanced Custom Fields Settings
 *
 * @package Chroma_Theme
 */

// ACF wrapper functions. Use instead of standard ACF template tags...
/*
 *		_get_field()
 *		_the_field()
 *		_get_sub_field()
 *		_the_sub_field()
 *		_has_sub_field()
 */
require 'acf-wrapper-functions.php';


// Options pages.
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media Settings',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'options-general.php',
	));
	
}

// ACF default fields.
require 'acf-social-media-fields.php';