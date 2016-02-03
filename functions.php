<?php
/**
 * Chroma Theme Functions
 *
 * @package Chroma_Theme
 */


// Theme setup functions.
require get_template_directory() . '/inc/functions/setup.php';

// Style and script assets.
require get_template_directory() . '/inc/functions/assets.php';

// Extra features - Body classes, clean-up & Soil.
require get_template_directory() . '/inc/functions/extras.php';

// Custom template tags.
require get_template_directory() . '/inc/functions/template-tags.php';

// Chroma Sites admin branding.
require get_template_directory() . '/inc/functions/branding.php';

// ACF settings.
require get_template_directory() . '/inc/acf/acf-setup.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Implement the Custom Header feature.
 *
 * require get_template_directory() . '/inc/custom-header.php';
*/

/**
 * Load Jetpack compatibility file.
 *
 * require get_template_directory() . '/inc/jetpack.php';
*/