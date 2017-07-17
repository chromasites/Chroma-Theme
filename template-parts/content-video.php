<?php
/**
 * Template part for displaying Video posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chroma_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		
		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : 
			get_template_part( 'template-parts/post-archive', 'meta' );
		endif;

		?>

	</header><!-- .entry-header -->


	<div class="entry-content">
		
		<?php

		// Embed Video Player
		$videoframe = _get_field('video_url');
		$aspectratio = _get_field('aspect_ratio');

		preg_match('/src="(.+?)"/', $videoframe, $matches);
		$src = $matches[1];

		$params = array(
		    'controls'    => 0,
		    'hd'        => 1,
		    'autohide'    => 1
		);

		$new_src = add_query_arg($params, $src);
		$videoframe = str_replace($src, $new_src, $videoframe);
		$attributes = 'frameborder="0" class="embed-responsive-item"';
		$videoframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $videoframe);

		echo '<div id="featured-video" class="embed-responsive embed-responsive-' . $aspectratio . '">' . $videoframe . '</div>';

		the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'chroma' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chroma' ),
			'after'  => '</div>',
		) );

		?>

	</div><!-- .entry-content -->


	<footer class="entry-footer">

		<?php

		if ( 'post' === get_post_type() ) : 
			get_template_part( 'template-parts/post-single', 'footer' );
		endif;

		?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
