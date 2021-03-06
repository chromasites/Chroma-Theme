<?php
/**
 * The template for displaying archive pages.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="blog-archive" class="right-sidebar">

	<?php get_template_part('template-parts/post-archive', 'header'); ?>

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main col-md-8" role="main">

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
			
			<div id="sidebar" class="col-md-4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- .row -->
	</div>
	
</div><!-- #blog-archive -->

<?php get_footer();
