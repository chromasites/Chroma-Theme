<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Chroma_Theme
 */


/**
 * Header logo
 */
if ( ! function_exists( 'chroma_header_logo' ) ) :
	function chroma_header_logo() {

		echo '<a class="brand-link" itemprop="url" href="' . esc_url( home_url( '/' ) ) . '" title="' . get_bloginfo('name') . ' - ' . get_bloginfo('description') . '" rel="home">';

		$attachmentId = get_theme_mod('brand_logo');

	    if ($attachmentId != 0) {
	        $logosrc = wp_get_attachment_url($attachmentId);
	        echo '<img itemprop="logo" src="' . $logosrc . '" alt="' . get_bloginfo('name') . '"/>';
	    } else {
	    	echo '<img src="' . get_stylesheet_directory_uri() . '/images/default-logo.png" />';
	    }

	    echo '</a>';

	}
endif;


/**
 * Date the post was published
 */
if ( ! function_exists( 'chroma_posted_on' ) ) :
	function chroma_posted_on() {

		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$posted_on = sprintf(
			esc_html_x( '%s', 'post date', 'chroma' ),
			'<span class="posted-on"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a></span>');

		echo $posted_on;
	}
endif;


/**
 * Date the post was updated
 */
if ( ! function_exists( 'chroma_updated_on' ) ) :
	function chroma_updated_on() {

		$time_updated_string = '<time class="entry-date published updated" datetime="%1$s">Updated: %2$s</time>';

		$time_updated_string = sprintf( $time_updated_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$updated_on = sprintf(
			esc_html_x( '%s', 'post date', 'chroma' ),
			'<span class="updated-on">' . $time_updated_string . '</span>'
		);

		if ( get_the_time( 'U' ) != get_the_modified_date( 'U' ) ) {
			echo $updated_on;
		}
	}
endif;


/**
 * Author with link
 */
if ( ! function_exists( 'chroma_posted_by' ) ) :
	function chroma_posted_by() {

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'chroma' ),
			'<span class="author byline vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		if( get_theme_mod( 'blog_hide_author' ) != 'checked') {
			echo $byline . '<span class="sep"> &bull; </span>';
		}
	}
endif;


/**
 * Category list with links
 */
if ( ! function_exists( 'chroma_category_links' ) ) :
	function chroma_category_links() {

		$categories_list = get_the_category_list( esc_html__( ', ', 'chroma' ) );
		if ( $categories_list && chroma_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( ' %1$s', 'chroma' ) . '</span> ', $categories_list ) . '<span class="sep"> &bull; </span>';
		}
	}
endif;


/**
 * Tag list with links
 */
if ( ! function_exists( 'chroma_tag_links' ) ) :
	function chroma_tag_links() {

		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'chroma' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( ' %1$s', 'chroma' ) . '</span>', $tags_list );
		}
	}
endif;


/**
 * Comments link with dynamic count
 */
if ( ! function_exists( 'chroma_comment_link' ) ) :
	function chroma_comment_link() {

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="sep"> &bull; </span>' . '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Comment', 'chroma' ), esc_html__( '1 Comment', 'chroma' ), esc_html__( '% Comments', 'chroma' ) );
			echo '</span>';
		}
	}
endif;

