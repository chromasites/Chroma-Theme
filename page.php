<?php
/**
 * The template for displaying all pages.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="page" class="page-section right-sidebar">

	<?php get_template_part('template-parts/titles', 'page'); ?>

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
			<?php get_sidebar(); ?>

		</div><!-- .row -->
	</div>

</div><!-- #page -->

<?php get_footer();
