<?php
/**
 * Primary Navigation.
 *
 * @package Chroma_Theme
 */

if (has_nav_menu( 'mobile' )) { $show_mobile_menu = 'show-mobile-menu'; } ?>

<nav class="navbar chroma-navbar <?php echo $show_mobile_menu;?>" role="navigation">
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</div>
		<div id="navbar-collapse" class="collapse navbar-collapse">
		<?php
		// Output navigation through Bootstrap navwalker.
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'menu_class'        => 'nav navbar-nav desktop-menu',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
		);
		// Show different mobile navigation if available.
		wp_nav_menu( array(
			'theme_location'    => 'mobile',
			'depth'             => 2,
			'menu_class'        => 'nav navbar-nav mobile-menu',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
		);
		?>
		</div>
	</div>
</nav>