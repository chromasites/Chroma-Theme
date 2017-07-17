<?php
/**
 * Sub Footer.
 *
 * @package Chroma_Theme
 */

?>

<div id="subfooter" class="container-fluid">

	<div class="copyright">
		<?php 
		
		echo '&copy;'; 

		if( get_theme_mod( 'copyright_start_year' ) != '') {
			echo get_theme_mod( 'copyright_start_year' ) . '&ndash;';
		}

		echo date("Y ") . get_theme_mod( 'custom_copyright', get_bloginfo('name') );

		 ?>
	</div>

	<div class="login">
		<?php if( !is_user_logged_in() && (get_theme_mod( 'hide_footer_loginlink' ) != 'checked')) {
			wp_loginout($_SERVER['REQUEST_URI']);
		} ?>
	</div>

	<?php chroma_designer_branding('dark'); // 'dark' OR 'light' ?>

</div>