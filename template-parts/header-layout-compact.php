<?php
/**
 * Header Layout.
 *
 * @package Chroma_Theme
 */
?>

<header id="header" class="site-header compact-header-layout" role="banner">

	<nav class="navbar chroma-navbar" role="navigation">
		<div class="container">
			<?php chroma_header_logo(); ?>
		</div>
	</nav>

	<div class="container">
		<div class="row">

			<div class="site-info site-info-1 col-sm-6 ">
				<?php get_template_part('template-parts/header', 'siteinfo-1'); ?>
			</div>

			<div class="site-info site-info-2 col-sm-6">
				<?php get_template_part('template-parts/header', 'siteinfo-2'); ?>
			</div>

		</div>
	</div>
	
</header><!-- #header -->