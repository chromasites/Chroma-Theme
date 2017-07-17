<?php
/**
 * Page Title.
 *
 * @package Chroma_Theme
 */

?>

<header class="page-header">

<?php

// Featured Image
if ( (_get_field('featured_image_display') != '') && has_post_thumbnail() ) :

	echo '<div class="featured-image ' . _get_field('featured_image_display') . '">';
	the_post_thumbnail( 'full' );
	echo '</div>';

endif;


// Page Title
if (_get_field('headline_display') != 'none') :

	echo '<div class="container page-title"><h1 class="' . _get_field('headline_align') . '">';

			if (_get_field('headline_display') == 'alternate') {
				_the_field('alternate_headline');
			} else {
				the_title();
			}

			if (_get_field('include_subhead')) {
				echo '<br><small>';
				_the_field('headline_subhead');
				echo '</small>';
			}
		
	echo '</h1></div>';

endif; ?>

</header><!-- .page-header -->

