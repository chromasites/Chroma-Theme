<?php
/**
 * Primary Navigation.
 *
 * @package Chroma_Theme
 */

if (has_nav_menu( 'mobile' )) { $show_mobile_menu = 'show-mobile-menu'; } ?>

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<span class="fa fa-home"></span>
			</a>
		</div>
		<div id="navbar-collapse" class="collapse navbar-collapse <?php echo $show_mobile_menu;?>">
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
		if (has_nav_menu( 'mobile' )) {
			wp_nav_menu( array(
				'theme_location'    => 'mobile',
				'depth'             => 2,
				'menu_class'        => 'nav navbar-nav mobile-menu',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			);
		}
		?>
		</div>
