<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Chroma_Theme
 */

get_header(); ?>
<div id="error-page" class="page-section right-sidebar">

	<header class="page-header">
		<div class="container">
			<h1 class="page-title">
				<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'chroma' ); ?>
			</h1>
		</div>
	</header><!-- .page-header -->

	<div class="container">

		<main id="main" class="site-main col-md-8" role="main">

			<section class="error-404 not-found">

				<div class="entry-content">
					
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'chroma' ); ?></p>

					<?php get_search_form();

					the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
				
			</section><!-- .error-404 -->

		</main><!-- #main -->

		
		<div id="sidebar" class="col-md-4">
			<aside class="widget-area sidebar-content" role="complementary">
				<?php

					the_widget( 'WP_Widget_Recent_Posts', null, array(
						'before_title' => '<h3 class="widget-title">',
						'after_title' => '</h3>',
					) );

					// Only show the widget if site has multiple categories.
					if ( chroma_categorized_blog() ) :
				?>

				<div class="widget widget_categories">
					<h3 class="widget-title"><?php esc_html_e( 'Popular Categories', 'chroma' ); ?></h3>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div><!-- .widget -->

				<?php endif; ?>

			</aside>	
		</div><!-- #sidebar -->

	</div>
		
</div><!-- #error-page -->

<?php get_footer();
