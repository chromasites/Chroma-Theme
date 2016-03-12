<?php
/**
 * Customizable copyright date and name.
 *
 * @package Chroma_Theme
 */

echo '&copy;'; 

if( get_theme_mod( 'copyright_start_year' ) != '') {

	echo get_theme_mod( 'copyright_start_year' ) . '&ndash;';

}

echo date("Y ");

echo get_theme_mod( 'custom_copyright', get_bloginfo('name') );