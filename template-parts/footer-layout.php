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


		<ul class="social-icons">
			<?php get_template_part('template-parts/social', 'icons'); ?>
		</ul><!-- .social-icons -->

		<div class="search">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<div class="input-group input-group-sm">
					<input id="search-input" type="text" class="form-control" placeholder="Search..." name="s">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><span class="fa fa-search"></span></button>
					</span>
				</div>
			</form>
		</div><!-- .search -->

	</div>
</footer><!-- #footer -->
