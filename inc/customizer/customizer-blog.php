<?php
/**
 * Chroma Theme Blog Customizer
 *
 * @package Chroma_Theme
 */

/*


// Example color picker...
$wp_customize->add_setting('link_color');
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'      => __( 'Header Color', 'mytheme' ),
	'section'    => 'blog_customizer',
	'settings'   => 'link_color',
) ) );
*/

// Add Blog section.
$wp_customize->add_section( 'blog_customizer' , array(
    'title'      => __( 'Blog', 'chroma' ),
    'priority'   => 15,
) );

// Hide Blog Search Box
$wp_customize->add_setting( 'blog_hide_author' );
$wp_customize->add_control(
	'blog_hide_author',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Hide Author', 'chroma' ),
	    'section'	=> 'blog_customizer',
	    'settings'	=> 'blog_hide_author',
	)
);

// Header layout style.
$wp_customize->add_setting( 'blog_post_layout', array(
    'default' => 'standard',
) );
$wp_customize->add_control(
	'blog_post_layout',
	array(
	    'type'		=> 'radio',
	    'label'		=> __( 'Blog Post Layout', 'chroma' ),
	    'section'	=> 'blog_customizer',
	    'settings'	=> 'blog_post_layout',
	    'choices'	=> array(
	        'standard'	=> 'Standard',
	        'magazine'	=> 'Magazine Cover (featured images)',
	    ),
	)
);
