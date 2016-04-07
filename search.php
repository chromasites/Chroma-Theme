<?php
/**
 * The template for displaying search results pages.
 *
 * @package Chroma_Theme
 */

get_header(); ?>

<div id="search-results-page" class="page-section">

	<div class="container">

		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : 

			$searchdomain = site_url();
			$findhttp = array( 'http://', 'https://' );
			$replacehttp = '';
			$displaydomain = str_replace( $findhttp, $replacehttp, $searchdomain ); ?>
			
			<header class="search-header">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<div class="input-group input-group-lg">
						<div class="input-group-addon"><span class="fa fa-search"></span></div>
						<input type="search" class="search-field form-control" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" title="Search for:" />
						<span class="input-group-btn hidden-xs">
							<button class="btn btn-default" type="submit">Search</button>
						</span>
					</div>
				</form>

				<h1 class="search-results-title">
				Results found on <?php echo $displaydomain; ?> for: 
				<nobr><strong><?php echo get_search_query(); ?></strong> 
				(<?php timer_stop(1,2); ?> seconds)</nobr>
				</h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="search-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<div class="search-link">
						<?php $permalink = get_permalink();
						$findhttp = array( 'http://', 'https://' );
						$replacehttp = '';
						$displayurl = str_replace( $findhttp, $replacehttp, $permalink );
						echo $displayurl;
						?>
					</div>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="search-meta">
						<span class="search-date"><time><?php the_time('F j, Y'); ?></time></span> - 
						<span class="search-author">by <?php the_author(); ?> </span> 
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="search-summary">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'thumbnail', array( 'class' => 'search-thumbnail alignright' ) );
					} ?>

					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->

			</article><!-- #post-## -->


			<?php endwhile;

			the_posts_navigation( array(
				'prev_text'          => __( 'More Results' ),
				'next_text'          => __( 'Previous Results' ),
		    ) );

		else : ?>

			<h1 class="search-results-title">
			No results found on <?php echo $displaydomain; ?> for: 
			<nobr><strong><?php echo get_search_query(); ?></strong></nobr>
			</h1>

		<?php endif; ?>

		</main><!-- #main -->
		
	</div>

</div><!-- #search-results -->

<?php
get_footer();
