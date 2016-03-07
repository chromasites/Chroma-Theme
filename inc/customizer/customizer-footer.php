<?php
/**
 * Chroma Theme Footer Customizer
 *
 * @package Chroma_Theme
 */

/*


// Example color picker...
$wp_customize->add_setting('link_color');
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'      => __( 'Header Color', 'mytheme' ),
	'section'    => 'footer_customizer',
	'settings'   => 'link_color',
) ) );
*/

// Add footer section.
$wp_customize->add_section( 'footer_customizer' , array(
    'title'      => __( 'Footer', 'chroma' ),
    'priority'   => 19,
) );

// Hide Footer Search Box
$wp_customize->add_setting( 'hide_footer_search' );
$wp_customize->add_control(
	'hide_footer_search',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Hide Search Box', 'chroma' ),
	    'section'	=> 'footer_customizer',
	    'settings'	=> 'hide_footer_search',
	)
);

// Hide Footer Login Link
$wp_customize->add_setting( 'hide_footer_loginlink' );
$wp_customize->add_control(
	'hide_footer_loginlink',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Hide Login Link', 'chroma' ),
	    'section'	=> 'footer_customizer',
	    'settings'	=> 'hide_footer_loginlink',
	)
);

// Hide Footer Social Icons
$wp_customize->add_setting( 'hide_footer_socicons' );
$wp_customize->add_control(
	'hide_footer_socicons',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Hide Social Icons', 'chroma' ),
	    'section'	=> 'footer_customizer',
	    'settings'	=> 'hide_footer_socicons',
	)
);

// Include Superfooter
$wp_customize->add_setting( 'display_superfooter' );
$wp_customize->add_control(
	'display_superfooter',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Display Superfooter', 'chroma' ),
	    'section'	=> 'footer_customizer',
	    'settings'	=> 'display_superfooter',
	)
);

// Custom Copyright
$wp_customize->add_setting( 'custom_copyright' );
$wp_customize->add_control(
	'custom_copyright',
	array(
	    'type'		=> 'text',
	    'label'		=> __( 'Custom Copyright Text', 'chroma' ),
	    'section'	=> 'footer_customizer',
	    'settings'	=> 'custom_copyright',
	)
);

// Copyright Start Year
$wp_customize->add_setting( 'copyright_start_year' );
$wp_customize->add_control(
	'copyright_start_year',
	array(
	    'type'		=> 'text',
	    'label'		=> __( 'Copyright Start Year', 'chroma' ),
	    'section'	=> 'footer_customizer',
	    'settings'	=> 'copyright_start_year',
	)
);