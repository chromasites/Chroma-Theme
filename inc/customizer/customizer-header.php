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

// Upload Image Logo
$wp_customize->add_setting('brand_logo');
$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'brand_logo', array(
		    'section' => 'header_customizer',
		    'label' => __( 'Upload Logo', 'chroma' ),
		    'mime_type' => 'image',
		    'settings'   => 'brand_logo'
		)
	)
);

// Header layout style.
$wp_customize->add_setting( 'header_layout' );
$wp_customize->add_control(
	'header_layout',
	array(
	    'type'		=> 'radio',
	    'label'		=> __( 'Header Layout Style', 'chroma' ),
	    'section'	=> 'header_customizer',
	    'settings'	=> 'header_layout',
	    'choices'	=> array(
	        ''	=> 'Default',
	        'centered'	=> 'Centered',
	        'float'		=> 'Float',
	        'compact'	=> 'Compact',
	    ),
	)
);

// Fixed navbar.
$wp_customize->add_setting( 'fixed_navbar' );
$wp_customize->add_control(
	'fixed_navbar',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Fix navbar to top', 'chroma' ),
	    'section'	=> 'header_customizer',
	    'settings'	=> 'fixed_navbar',
	)
);

// Header layout style (in development).
$wp_customize->add_setting( 'navbar_alignment' );
$wp_customize->add_control(
	'navbar_alignment',
	array(
	    'type'		=> 'radio',
	    'label'		=> __( 'Navbar Alignment', 'chroma' ),
	    'section'	=> 'header_customizer',
	    'settings'	=> 'navbar_alignment',
	    'choices'	=> array(
	        'navbar-left'	=> 'Left',
	        'navbar-centered'	=> 'Centered',
	        'navbar-right'		=> 'Right',
	    ),
	)
);

// EXAMPLE CONDITIONAL CUSTOMIZER
/*$wp_customize->add_setting( 'demo_radio_control', array(
    'default'        => 'a',
) );
 
$wp_customize->add_control( 'demo_radio_control', array(
    'label'      => 'radio_control',
    'section'    => 'header_customizer',
    'settings'   => 'demo_radio_control',
    'type'       => 'radio',
    'choices'    => array(
    'a' => 'Choice A',
    'b' => 'Choice B',
    ),
) );

$wp_customize->add_setting( 'choice_a_text', array(
    'default' => '',
) );
 
$wp_customize->add_control( 'choice_a_text', array(
    'label'      => 'Choice A: ',
    'section'    => 'header_customizer',
    'type'       => 'text',
    'active_callback' => 'choice_a_callback',
) );

function choice_a_callback( $control ) {
    if ( $control->manager->get_setting('demo_radio_control')->value() == 'a' ) {
        return true;
    } else {
        return false;
    }
}*/