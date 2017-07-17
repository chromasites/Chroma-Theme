<?php
/**
 * The main template file.
 *
 * @package Chroma_Theme
 */

get_header();

$column_class = 'col-md-12 no-sidebar';
if( get_theme_mod( 'blog_index_hide_sidebar' ) != 'checked') $column_class = 'col-md-8';
if( get_theme_mod( 'blog_index_center_content' ) == 'checked') $center_class = 'center-content';
$column_template = get_theme_mod( 'blog_index_layout' );

?>

<div id="blog-index" class="blog">

	<?php get_template_part('template-parts/post-archive', 'header'); ?>

	<div class="container">
		<div class="row">
		
			<main id="main" class="site-main <?php echo $column_class . ' ' . $column_template . ' ' . $center_class; ?>" role="main">

				<?php
				if ( have_posts() ) :

					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post-archive-layout', $column_template );

					endwhile;

					the_posts_navigation();

				endif; ?>

			</main><!-- #main -->
			
			<?php // Show or Hide Sidebar
			if( get_theme_mod( 'blog_index_hide_sidebar' ) != 'checked') {

				echo '<div id="sidebar" class="col-md-4">';
					get_sidebar();
				echo '</div>';

			}
			?>

		</div><!-- .row -->
	</div>

</div><!-- #blog-index -->

<?php get_footer();
