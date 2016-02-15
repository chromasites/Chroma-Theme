<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chroma_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'next_or_number'   => 'number',
				'before'      => '<ul class="page-numbers"><li class="legend">Page:</li><li>',
				'separator'   => '</li><li>',
				'after'       => '</li></ul>'
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
