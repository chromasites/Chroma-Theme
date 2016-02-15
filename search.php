<?php
/**
 * The template for displaying search results pages.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="id="search-results"" class="">

	<header class="page-header">
		<div class="container">
			<h1 class="page-title">
				<?php printf( esc_html__( 'Search Results for: %s', 'chroma' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h1>
		</div>
	</header><!-- .page-header -->

	<div class="container">

		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation( array(
				'prev_text'          => __( 'More Results' ),
				'next_text'          => __( 'Previous Results' ),
		    ) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
		
	</div>

</div><!-- #search-results -->

<?php
get_footer();
