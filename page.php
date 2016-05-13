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
		
			<main id="main" class="site-main col-md-8" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
			<div id="sidebar" class="col-md-4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- .row -->
	</div>

</div><!-- #page -->

<?php get_footer();
