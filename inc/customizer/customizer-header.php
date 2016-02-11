<?php
/**
 * Chroma Theme Header Customizer
 *
 * @package Chroma_Theme
 */

// Add header section.
$wp_customize->add_section( 'header_customizer' , array(
    'title'      => __( 'Header', 'chroma' ),
    'priority'   => 10,
) );

// Upload logo.
$wp_customize->add_setting('website_logo');
$wp_customize->add_control(
   new WP_Customize_Image_Control(
       $wp_customize,
       'website_logo',
       array(
           'label'      => __( 'Upload a Logo', 'chroma' ),
           'section'    => 'header_customizer',
           'settings'   => 'website_logo'
       )
   )
);

// Header layout style (in development).
$wp_customize->add_setting( 'header_layout' );
$wp_customize->add_control(
	'header_layout',
	array(
	    'type'		=> 'radio',
	    'label'		=> __( 'Header Layout Style', 'chroma' ),
	    'section'	=> 'header_customizer',
	    'settings'	=> 'header_layout',
	    'choices'	=> array(
	        'standard'	=> 'Standard',
	        'centered'	=> 'Centered',
	        'float'		=> 'Float',
	        'compact'	=> 'Compact',
	    ),
	)
);