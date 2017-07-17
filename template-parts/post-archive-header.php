<?php
/**
 * Archive Titles.
 *
 * @package Chroma_Theme
 */
?>

<header class="page-header">
	<div class="container page-title">
		<?php

		if ( is_home() && ! is_front_page() && get_option('page_for_posts') ) {

			$blog_page_id = get_option('page_for_posts');
			echo '<h1>' . get_page($blog_page_id)->post_title . '</h1>';

		} elseif ( is_post_type_archive() ) { 

			echo '<h1>' . post_type_archive_title() . '</h1>';

		} else {

			the_archive_title( '<h1>', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );

		}

		?>
	</div>
</header><!-- .page-header -->