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
		} 

		if( get_theme_mod( 'hide_footer_socicons' ) != 'checked') {
			get_template_part('template-parts/social', 'icons');
		}

		if( get_theme_mod( 'hide_footer_search' ) != 'checked') {
			echo '<div class="footer-search">';
			get_search_form();
			echo '</div>';
		} ?>

	</div>
</footer><!-- #footer -->
