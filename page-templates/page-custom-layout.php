<?php
/**
 * Template Name: Custom (Page Builder)
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="page" class="custom-layout" >

	<?php get_template_part('template-parts/page', 'header'); ?>
		
	<main id="main" class="container site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

</div><!-- #page -->

<?php get_footer();
