<?php
/**
 * The template for displaying all single posts.
 *
 * @package Chroma_Theme
 */

get_header(); ?>
	
<div id="blog-post" class="page-section right-sidebar">

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main col-md-8" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation( array( 'prev_text' => 'Previous', 'next_text' => 'Next' ));

				if ( comments_open() || get_comments_number() ) : comments_template(); endif;

			endwhile;
			?>

			</main><!-- #main -->	
			
			<div id="sidebar" class="col-md-4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- .row -->
	</div>

</div><!-- #blog-post -->


<?php get_footer();
