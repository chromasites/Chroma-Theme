<?php
/**
 * Blog Layout: Image Top
 *
 * @package Chroma_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<?php

	if ( has_post_thumbnail() ) {
		echo '<div class="featured-image"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
		the_post_thumbnail( array(1500, 750) );
		
		if ( has_post_format( 'video' ) ) {
			echo '<div class="video-icon">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
					<i class="fa fa-youtube-play fa-stack-2x" aria-hidden="true"></i>
				</span>
			</div>';
		}

		echo '</a></div>';
	}

	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

	if ( 'post' === get_post_type() ) : 
		get_template_part( 'template-parts/post-archive', 'meta' );
	endif;
		
	if( get_theme_mod( 'blog_index_hide_excerpt' ) != 'checked') {
		echo '<div class="entry-excerpt">';
		the_excerpt();
		echo '</div>';
	}

 ?>

</article><!-- #post-## -->