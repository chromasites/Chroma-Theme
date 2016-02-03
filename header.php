<?php
/**
 * The header for our theme.
 *
 * @package Chroma_Theme
 */

?><!DOCTYPE html>
<!--    ________________________________________________________
        
          Website Design by Chroma Sites - www.chromasites.com
        ________________________________________________________
-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php get_template_part( 'template-parts/favicons' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page-wrapper">

<a class="skip-link sr-only" href="#main"><?php esc_html_e( 'Skip to content', 'chroma' ); ?></a>

<?php get_template_part( 'template-parts/header', 'promobar' ); ?>

<?php get_template_part( 'template-parts/header', 'layout' ); ?>

<div id="main-content" class="">
