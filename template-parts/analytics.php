<?php
/**
 * Activate the Google Analytics Tracking Code for Non-Admins
 *
 * @package Chroma_Theme
 */

if ( !current_user_can( 'edit_posts' ) ) : ?>

<!-- Google Analytics -->

<?php endif; 