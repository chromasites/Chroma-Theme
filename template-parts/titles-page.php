<?php
/**
 * Page Title.
 *
 * @package Chroma_Theme
 */
?>

<header class="page-header">
	<div class="container">
		<h1 class="page-title">
		<?php
		if (_get_field('headline_display') == 'alternate') {
			_the_field('alternate_headline');
		} elseif (_get_field('headline_display') == 'none') {
			// leave empty
		} else {
			the_title();
		} ?>
		</h1>
	</div>
</header><!-- .page-header -->