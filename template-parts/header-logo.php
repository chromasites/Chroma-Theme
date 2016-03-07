<?php
/**
 * Logo
 *
 * @package Chroma_Theme
 */
?>
	<a class="brand-link" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" rel="home">
	<?php if ( get_theme_mod( 'website_logo' ) ) : ?>
		<img itemprop="logo" src="<?php echo esc_url( get_theme_mod( 'website_logo' ) ); ?>" alt="<?php echo bloginfo('name'); ?>"/>
	<?php else : ?>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default-logo.png" />
	<?php endif; ?>
	</a>