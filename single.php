<?php
/**
 * The template for displaying all single posts.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="blog-post" class="right-sidebar">

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->	
			
			<?php get_sidebar(); ?>

		</div><!-- .row -->
	</div>

</div><!-- #blog-post -->

<?php get_footer();
