<?php
/**
 * Header Layout.
 *
 * @package Chroma_Theme
 */
?>

<header id="header" class="site-header float-header-layout" role="banner">

	<div class="container">
		<div class="row">

			<div class="site-logo col-sm-4">
				<?php chroma_header_logo(); ?>
			</div>

			<div class="header-space col-sm-8">
				<div class="row">

					<div class="site-info site-info-1 col-sm-6">
						<?php get_template_part('template-parts/header', 'siteinfo-1'); ?>
					</div>

					<div class="site-info site-info-2 col-sm-6">
						<?php get_template_part('template-parts/header', 'siteinfo-2'); ?>
					</div>

					<div class="layout-break clearfix"></div>
					
					<nav class="navbar chroma-navbar" role="navigation">
						<?php get_template_part( 'template-parts/navigation', 'primary' ); ?>
					</nav>

				</div>
			</div><!-- .header-space -->

		</div>
	</div>	
	
</header><!-- #header -->