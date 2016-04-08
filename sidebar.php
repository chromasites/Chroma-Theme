<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Chroma_Theme
 */

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>

<aside class="widget-area sidebar-content" role="complementary">
	<?php

	if ( is_page() ) {

		dynamic_sidebar( 'pages-sidebar' ); // Display pages sidebar only on pages

	} else {

		dynamic_sidebar( 'posts-sidebar' ); // Display blog sidebar everywhere else (inlcudes custom post types)

	}

	dynamic_sidebar( 'main-sidebar' ); // Display main sidebar everywhere

	 ?>
</aside><!-- #sidebar -->
