<?php
/**
 * Header Layout.
 *
 * @package Chroma_Theme
 */

?>

<header id="header" class="site-header" role="banner">
	<div class="container">
		
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<?php get_template_part('template-parts/social', 'icons'); ?>

	</div>

	<?php get_template_part( 'template-parts/navigation', 'primary' ); ?>

</header><!-- #header -->
