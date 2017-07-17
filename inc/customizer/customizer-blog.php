<?php
/**
 * Chroma Theme Blog Customizer
 *
 * @package Chroma_Theme
 */


// Add Blog section.
$wp_customize->add_section( 'blog_customizer' , array(
    'title'      => __( 'Blog', 'chroma' ),
    'priority'   => 15,
) );

// Blog Index Layout Styles
$wp_customize->add_setting( 'blog_index_layout' );
$wp_customize->add_control(
	'blog_index_layout',
	array(
	    'type'		=> 'radio',
	    'label'		=> __( 'Blog Index Columns Layout', 'chroma' ),
	    'section'	=> 'blog_customizer',
	    'settings'	=> 'blog_index_layout',
	    'choices'	=> array(
	        ''	=> 'Full Content',
	        'one-col-imgtop'	=> 'Image Top',
	        'one-col-imgmiddle'	=> 'Image Middle',
	        'one-col-imgleft'	=> 'Thumbnail Left',
	        'one-col-imgright'	=> 'Thumbnail Right',
	    ),
	)
);

// Center Content on Blog Index
$wp_customize->add_setting( 'blog_index_center_content' );
$wp_customize->add_control(
	'blog_index_center_content',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Center content on blog index', 'chroma' ),
	    'section'	=> 'blog_customizer',
	    'settings'	=> 'blog_index_center_content',
	)
);

// Hide Blog Index Excerpts
$wp_customize->add_setting( 'blog_index_hide_excerpt' );
$wp_customize->add_control(
	'blog_index_hide_excerpt',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Hide excerpt on blog index', 'chroma' ),
	    'section'	=> 'blog_customizer',
	    'settings'	=> 'blog_index_hide_excerpt',
	)
);

// Hide Blog Index Sidebar
$wp_customize->add_setting( 'blog_index_hide_sidebar' );
$wp_customize->add_control(
	'blog_index_hide_sidebar',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Hide sidebar on blog index', 'chroma' ),
	    'section'	=> 'blog_customizer',
	    'settings'	=> 'blog_index_hide_sidebar',
	)
);

// Hide Blog Authors
$wp_customize->add_setting( 'blog_hide_author' );
$wp_customize->add_control(
	'blog_hide_author',
	array(
	    'type'		=> 'checkbox',
	    'label'		=> __( 'Hide Authors', 'chroma' ),
	    'section'	=> 'blog_customizer',
	    'settings'	=> 'blog_hide_author',
	)
);
