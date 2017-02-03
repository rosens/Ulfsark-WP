<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ulfsark-Ulfsark-Components
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//db.onlinewebfonts.com/c/d0b9458c6d1bf76bb55624385cf59c84?family=Celtic+Garamond+the+2nd" rel="stylesheet" type="text/css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ulfsark_components' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part( 'components/header/header', 'image' ); ?>

		<?php ulfsark_components_the_custom_logo(); ?>

		<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>

	</header>
	<div id="content" class="site-content">
