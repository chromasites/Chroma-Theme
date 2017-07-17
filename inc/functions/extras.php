<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Chroma_Theme
 */

// Theme support for Soil plugin.
add_theme_support('soil-clean-up');
add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-jquery-cdn');
// add_theme_support('soil-relative-urls'); bad for SEO


// Disable inline styles for emoji.
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// Body classes.
function chroma_body_classes( $classes ) {

	$classes[] = get_theme_mod('chroma_layout');

	if ( get_theme_mod('fixed_navbar') == 'checked' ) { $classes[] = 'fixed-navbar-top'; }

	if ( is_multi_author() ) { $classes[] = 'group-blog'; }

	if ( ! is_singular() ) { $classes[] = 'hfeed'; }

	return $classes;
}
add_filter( 'body_class', 'chroma_body_classes' );


// Bootstrap Navwalker.
require_once('wp_bootstrap_navwalker.php');


// Advanced Custom Fields Helper Classes
function my_acf_admin_head() { ?>
<style type="text/css">
.acf-postbox .hide-label .acf-label { display: none; }
</style>
<?php } add_action('acf/input/admin_head', 'my_acf_admin_head');


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

?>