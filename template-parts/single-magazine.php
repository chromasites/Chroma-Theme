<?php
/**
 * Magazine Cover style for single posts.
 *
 * @package Chroma_Theme
 */
?>

<div id="blog-post" class="magazine-cover right-sidebar">

	<?php while ( have_posts() ) : the_post(); ?>

	<div id="feature-hero" class="scrollme">
		<div class="feature-bg">
			<header class="entry-header">
				<div class="container">

				<?php the_title( '<h1 class="entry-title">', '</h1>' );

				if ( 'post' === get_post_type() ) : 
					chroma_posted_on();
				endif;

				if ( has_post_thumbnail() ) {
					$feature_img_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
				    <script>
				    jQuery( document ).ready(function( $ ) {
				    	$("#feature-hero").addClass("has-featured-image");
				    	$("#feature-hero .feature-bg").backstretch("<?php echo $feature_img_url; ?>");
				    	$("#feature-hero .entry-title").addClass("animateme").attr({
						  "data-when" : "enter",
						  "data-from" : "0",
						  "data-to" : "2.5",
						  "data-opacity" : "0",
						  "data-translatey" : "-400"
						});
				    	$("#feature-hero .entry-meta").addClass("animateme").attr({
						  "data-when" : "enter",
						  "data-from" : "0",
						  "data-to" : "2",
						  "data-opacity" : "0",
						});
				    });
				    </script>
				<?php } ?>

				</div>
			</header><!-- .entry-header -->
		</div>
	</div>

	<?php endwhile; ?>


	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						
						<?php the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'chroma' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', true )
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chroma' ),
							'after'  => '</div>',
						) ); ?>

					</div><!-- .entry-content -->

					<div class="entry-share-buttons">
						<?php if ( is_single() ) :
							get_template_part( 'template-parts/social', 'share' );
						endif; ?>
					</div>

					<?php chroma_entry_footer(); ?>

				</article><!-- #post-## -->

				<?php the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->	
			
			<?php get_sidebar(); ?>

		</div><!-- .row -->
	</div>

</div><!-- #blog-post -->