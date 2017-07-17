<?php
/**
 * Template part for posts linking to other websites.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chroma_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		
		<?php

		$link_url = _get_field('external_link_url');

		the_title( '<h2 class="entry-title"><a target="_blank" href="' . esc_url( $link_url ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : 
			get_template_part( 'template-parts/post-archive', 'meta' );
		endif;

		?>

	</header><!-- .entry-header -->


	<div class="entry-content">
		
		<?php

		the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'chroma' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );

		echo '<p><a target="_blank" href="' . esc_url( $link_url ) . '" rel="bookmark">' . $link_url . '</a></p>';

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
