<?php
/**
 * Chroma Theme Footer Customizer
 *
 * @package Chroma_Theme
 */

// Add footer section.
$wp_customize->add_section( 'footer_customizer' , array(
    'title'      => __( 'Footer', 'chroma' ),
    'priority'   => 19,
) );

// Example color picker...
$wp_customize->add_setting('link_color');
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'      => __( 'Header Color', 'mytheme' ),
	'section'    => 'footer_customizer',
	'settings'   => 'link_color',
) ) );


