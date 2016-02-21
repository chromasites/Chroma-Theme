<?php
/**
 * Template Name: Custom Layout
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="page" class="no-sidebar custom-layout" >

	<?php get_template_part('template-parts/titles', 'page'); ?>
		
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

</div><!-- #page -->

<?php get_footer();
