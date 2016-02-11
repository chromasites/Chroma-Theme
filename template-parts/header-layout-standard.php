<?php
/**
 * Header Layout.
 *
 * @package Chroma_Theme
 */
?>

<header id="header" class="site-header standard-header-layout" role="banner">
	<div class="container">
		<div class="row">

			<?php get_template_part('template-parts/header', 'logo'); ?>

			<div class="site-info site-info-1">
				Site Info 1
			</div>

			<div class="site-info site-info-2">
				Site Info 2
				<?php // get_template_part('template-parts/social', 'icons'); ?>
			</div>

		</div>
	</div>

	<nav class="navbar chroma-navbar" role="navigation">
		<div class="container">
			<?php get_template_part( 'template-parts/navigation', 'primary' ); ?>
		</div>
	</nav>
	
</header><!-- #header -->