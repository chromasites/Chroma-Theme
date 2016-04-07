<?php
/**
 * The main template file.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="blog-index" class="page-section right-sidebar">

	<header class="page-header">
		<div class="container">
			<h1 class="page-title">
				<?php if ( is_home() && ! is_front_page() && get_option('page_for_posts') ) {
					$blog_page_id = get_option('page_for_posts');
					echo get_page($blog_page_id)->post_title;
				} elseif ( is_post_type_archive() ) {
					echo post_type_archive_title();
				} else {
					the_archive_title();
				} ?>
			</h1>
		</div>
	</header><!-- .page-header -->

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

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
	</div>

</div><!-- #blog-index -->

<?php get_footer();
