<?php
/**
 * The template for displaying the footer.
 *
 * @package Chroma_Theme
 */

?>

</div><!-- #main -->

<?php 

get_template_part( 'template-parts/footer', 'superfooter' );

get_template_part( 'template-parts/footer', 'layout' );

?>

</div><!-- #page-wrapper -->

<?php

get_template_part( 'template-parts/footer', 'subfooter' );

wp_footer();

?>

<!--<?php echo get_num_queries(); ?>q/<?php timer_stop(1); ?>s-->

</body>
</html>
