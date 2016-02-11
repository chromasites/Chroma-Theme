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
		
			<main id="main" class="site-main" role="main">

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
			
			<?php get_sidebar(); ?>

		</div><!-- .row -->
	</div>

</div><!-- #page -->

<?php get_footer();
