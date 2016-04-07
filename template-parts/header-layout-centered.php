<?php
/**
 * Header Layout.
 *
 * @package Chroma_Theme
 */
?>

<header id="header" class="site-header centered-header-layout" role="banner">
	<div class="container">
		<div class="row">

			<div class="site-logo col-sm-6 col-sm-push-3 col-md-4 col-md-push-4">
				<?php get_template_part('template-parts/header', 'logo'); ?>
			</div>

			<div class="layout-break visible-sm-block clearfix"></div>

			<div class="site-info site-info-1 col-sm-6 col-md-4 col-md-pull-4">
				<?php get_template_part('template-parts/header', 'siteinfo-1'); ?>
			</div>

			<div class="site-info site-info-2 col-sm-6 col-md-4">
				<?php get_template_part('template-parts/header', 'siteinfo-2'); ?>
			</div>

		</div>
	</div>

	<nav class="navbar chroma-navbar" role="navigation">
		<div class="container">
			<?php get_template_part( 'template-parts/navigation', 'primary' ); ?>
		</div>
	</nav>
	
</header><!-- #header -->