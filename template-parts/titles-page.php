<?php
/**
 * Page Title.
 *
 * @package Chroma_Theme
 */

if (_get_field('headline_display') != 'none') : ?>

<header class="page-header">
	<div class="container">
		<h1 class="page-title">
		<?php
			if (_get_field('headline_display') == 'alternate') {
				_the_field('alternate_headline');
			} else {
				the_title();
			}

			if (_get_field('include_subhead')) {
				echo '<br><small>';
				_the_field('headline_subhead');
				echo '</small>';
			}
		?>
		</h1>
	</div>
</header><!-- .page-header -->

<?php endif;