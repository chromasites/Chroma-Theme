<?php
/**
 * Blog Layout: Image Left
 *
 * @package Chroma_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">

		<?php

		if ( has_post_thumbnail() ) {
			echo '<div class="col-xs-4">';

			echo '<div class="featured-image"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
			the_post_thumbnail( 'thumbnail' );
			
			if ( has_post_format( 'video' ) ) {
				echo '<div class="video-icon">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
						<i class="fa fa-youtube-play fa-stack-2x" aria-hidden="true"></i>
					</span>
				</div>';
			}

			echo '</a></div>';

			echo '</div><div class="col-xs-8">';

		} else {

			echo '<div class="col-xs-12">';

		}

		?>

		

		<?php

		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : 
			get_template_part( 'template-parts/post-archive', 'meta' );
		endif;
			
		if( get_theme_mod( 'blog_index_hide_excerpt' ) != 'checked') {
			echo '<div class="entry-excerpt">';
			the_excerpt();
			echo '</div>';
		}

		echo '<div class="entry-more-link"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">Read More...</a></div>';

		echo '</div>';

		?>

	</div>
</article><!-- #post-## -->