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

			<?php get_template_part('template-parts/header', 'logo'); ?>

			<div class="header-space">
				<div class="row">

					<div class="site-info site-info-1">
						Site Info 1
					</div>

					<div class="site-info site-info-2">
						Site Info 2
						<?php // get_template_part('template-parts/social', 'icons'); ?>
					</div>

					<div class="layout-break"></div>
					
					<nav class="navbar chroma-navbar" role="navigation">
						<?php get_template_part( 'template-parts/navigation', 'primary' ); ?>
					</nav>

				</div>
			</div><!-- .header-space -->

		</div>
	</div>	
</header><!-- #header -->