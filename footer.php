<?php
/**
 * The template for displaying the footer.
 *
 * @package Chroma_Theme
 */

?>

</div><!-- #main -->

<?php get_template_part( 'template-parts/footer', 'superfooter' ); ?>

<?php get_template_part( 'template-parts/footer', 'layout' ); ?>

</div><!-- #page-wrapper -->

<div id="subfooter" class="container-fluid">
	<div class="copyright">
		&copy; <?php echo date("Y ");
		if ( _get_field('copyright_name', 'options') ) { _the_field('copyright_name', 'options'); }
		else { bloginfo('name'); } ?>
		<span class="login"> <?php wp_loginout($_SERVER['REQUEST_URI']); ?></span>
	</div>
</div>

<?php chroma_designer_branding('dark'); // 'dark' OR 'light' ?>

<?php wp_footer(); ?>

</body>
</html>
