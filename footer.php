<?php
/**
 * The template for displaying the footer.
 *
 * @package Chroma_Theme
 */

?>

</div><!-- #main -->

<?php if( get_theme_mod( 'display_superfooter' ) == 'checked') {
	get_template_part( 'template-parts/footer', 'superfooter' );
} ?>

<?php get_template_part( 'template-parts/footer', 'layout' ); ?>

</div><!-- #page-wrapper -->

<div id="subfooter" class="container-fluid">
	<div class="copyright">

		<?php get_template_part( 'template-parts/footer', 'copyright' ); ?>

		<?php if( get_theme_mod( 'hide_footer_loginlink' ) != 'checked') {
			echo '<span class="login">';
			wp_loginout($_SERVER['REQUEST_URI']);
			echo '</span>';
		} ?>

	</div>
</div>

<?php chroma_designer_branding('dark'); // 'dark' OR 'light' ?>

<?php wp_footer(); ?>

</body>
</html>
