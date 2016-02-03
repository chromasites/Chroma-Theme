<?php
/**
 * Archive Titles.
 *
 * @package Chroma_Theme
 */
?>

<header class="page-header">
	<div class="container">
		<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
	</div>
</header><!-- .page-header -->