<?php
/**
 * Header Layout.
 *
 * @package Chroma_Theme
 */
?>

<?php
	if (get_theme_mod('header_layout') == 'compact') {

		get_template_part( 'template-parts/header-layout', 'compact' );

	} elseif (get_theme_mod('header_layout') == 'centered') {

		get_template_part( 'template-parts/header-layout', 'centered' );

	} elseif (get_theme_mod('header_layout') == 'float') {

		get_template_part( 'template-parts/header-layout', 'float' );

	} elseif (get_theme_mod('header_layout') == 'standard') {

		get_template_part( 'template-parts/header-layout', 'standard' );

	} else { // Set standard as default layout

		get_template_part( 'template-parts/header-layout', 'standard' );

	}
?>