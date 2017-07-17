<?php
/**
 * Chroma Theme Layout Customizer
 *
 * @package Chroma_Theme
 */


// Add layout section.
$wp_customize->add_section( 'layout_customizer' , array(
    'title'      => __( 'Layout', 'chroma' ),
    'priority'   => 5,
) );

// Layout style.
$wp_customize->add_setting( 'chroma_layout' );
$wp_customize->add_control(
	'chroma_layout',
	array(
    	'type'		=> 'radio',
    	'label'		=> __( 'Layout Style', 'chroma' ),
    	'section'	=> 'layout_customizer',
    	'settings'	=> 'chroma_layout',
    	'choices'	=> array(
        	'walltowall' => 'Wall-to-Wall',
        	'letterhead' => 'Letterhead',
    ),
) );