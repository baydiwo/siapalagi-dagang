<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/newsslider.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	
	<link rel="stylesheet" href="style.css">

	<script src="<?php echo get_template_directory_uri(); ?>js/jquery-1.10.2.js"></script>
	<!-- <script src="js/jquery-1.6.js" type="text/javascript"></script> -->
	<script src="<?php echo get_template_directory_uri(); ?>js/jquery-ui.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>js/scripts.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>js/bootstrap.js"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>js/jquery.accessible-news-slider.js"></script>