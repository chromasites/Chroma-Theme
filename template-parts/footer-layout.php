<?php
/**
 * Footer Layout.
 *
 * @package Chroma_Theme
 */

?>

<footer id="footer" class="site-footer" role="contentinfo">
	<div class="container">
		
		<?php if (has_nav_menu( 'footer' )) {
			echo '<div class="footer-menu">';
			wp_nav_menu( array(
				'theme_location'    => 'footer',
				'depth'             => 1,
				'menu_class'        => 'footer-nav')
			);
			echo '</div><!-- .footer-menu -->'; 
		} ?>

		<?php get_template_part('template-parts/social', 'icons'); ?>

		<div class="footer-search">
			<?php get_search_form(); ?>
		</div><!-- .search -->

	</div>
</footer><!-- #footer -->
