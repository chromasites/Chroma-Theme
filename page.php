<?php
/**
 * The template for displaying all pages.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

	<?php get_template_part('template-parts/titles', 'page'); ?>

	<div id="page" class="container">

		<div class="row">
		
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
			<?php get_sidebar(); ?>

		</div><!-- .row -->
	</div><!-- #page -->

<?php get_footer();
