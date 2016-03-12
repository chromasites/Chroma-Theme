<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Chroma_Theme
 */


if ( ! function_exists( 'chroma_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function chroma_posted_on() {

	$time_updated_string = '<time class="entry-date published updated" datetime="%1$s">Updated %2$s</time>';

	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$time_updated_string = sprintf( $time_updated_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'chroma' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a> ' . $time_updated_string
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'chroma' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<div class="entry-meta">'
	 . '<span class="posted-on"><i title="Posted on..." class="fa fa-clock-o"></i> ' . $posted_on
	 . '</span>';
	if( get_theme_mod( 'blog_hide_author' ) != 'checked') {
		echo '<span class="byline">' . $byline . '</span>'
	 . '</div><!-- .entry-meta -->';
	}

}
endif;


if ( ! function_exists( 'chroma_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function chroma_entry_footer() {
	// Hide category and tag text for pages.
	
	echo '<footer class="entry-footer">';

	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'chroma' ) );
		if ( $categories_list && chroma_categorized_blog() ) {
			printf( '<span class="cat-links"><i title="Categories..." class="fa fa-archive"></i>' . esc_html__( ' %1$s', 'chroma' ) . '</span> ', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'chroma' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links"><i title="Tags..." class="fa fa-hashtag"></i>' . esc_html__( ' %1$s', 'chroma' ) . '</span> ', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link"><i title="Comments..." class="fa fa-commenting"></i> ';
		comments_popup_link( esc_html__( 'Comment', 'chroma' ), esc_html__( '1 Comment', 'chroma' ), esc_html__( '% Comments', 'chroma' ) );
		echo '</span>';
	}

/*	edit_post_link(
		sprintf(
			esc_html__( 'Edit %s', 'chroma' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
*/
	echo '</footer><!-- .entry-footer -->';
}
endif;


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function chroma_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'chroma_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'chroma_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so chroma_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so chroma_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in chroma_categorized_blog.
 */
function chroma_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'chroma_categories' );
}
add_action( 'edit_category', 'chroma_category_transient_flusher' );
add_action( 'save_post',     'chroma_category_transient_flusher' );
