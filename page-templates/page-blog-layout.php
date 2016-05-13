<?php
/**
 * Template Name: Blog Post Format
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="page" class="right-sidebar">

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main col-md-8" role="main">

				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-meta">
					<?php chroma_posted_on(); ?>
				</div><!-- .entry-meta -->

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
