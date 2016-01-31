<?php
/**
 * Promo Bar.
 *
 * @package Chroma_Theme
 */

?>

<footer id="footer" class="site-footer" role="contentinfo">
	<div class="container">
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'chroma' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'chroma' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'chroma' ), 'chroma', '<a href="http://www.chromasites.com" rel="designer">Chroma Sites</a>' ); ?>
		</div><!-- .site-info -->

	</div>
</footer><!-- #footer -->
