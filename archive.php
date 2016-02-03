<?php
/**
 * The template for displaying archive pages.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

	<?php get_template_part('template-parts/titles', 'archive'); ?>

	<div id="blog-archive" class="container">
		<div class="row">
		
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
			
			<?php get_sidebar(); ?>

		</div><!-- .row -->
	</div><!-- #blog-archive -->

<?php get_footer();
