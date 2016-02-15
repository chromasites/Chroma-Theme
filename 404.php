<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Chroma_Theme
 */

get_header(); ?>
<div id="error-page" class="right-sidebar">

	<header class="page-header">
		<div class="container">
			<h1 class="page-title">
				<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'chroma' ); ?>
			</h1>
		</div>
	</header><!-- .page-header -->

	<div class="container">

		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">
					
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'chroma' ); ?></p>

					<?php get_search_form();

					the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
				
			</section><!-- .error-404 -->

		</main><!-- #main -->

		<aside id="sidebar" class="widget-area" role="complementary">
			
			<?php

				the_widget( 'WP_Widget_Recent_Posts' );

				// Only show the widget if site has multiple categories.
				if ( chroma_categorized_blog() ) :
			?>

			<div class="widget widget_categories">
				<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'chroma' ); ?></h2>
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

		</aside><!-- #sidebar -->

	</div>
		
</div><!-- #error-page -->

<?php get_footer();
