<?php
/**
 * Default page template
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="page" class="<?php _the_field('content_column_width'); ?> <?php _the_field('content_column_position'); ?>" >

	<?php get_template_part('template-parts/page', 'header'); ?>

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

		</div><!-- .row -->
	</div>

</div><!-- #page -->

<?php get_footer();
