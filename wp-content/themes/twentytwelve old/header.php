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
<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slider.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css">

</head>

<body <?php body_class(); ?>>
<header>
<div id="container">
  <div class="row-fluid">
      <div class="span4 logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" />
        </div>
        <div class="span8">
          <ul class="unstyled inline contact right">
              <li>
                <p><img src="<?php echo get_template_directory_uri(); ?>/img/icon/mail.png" />&nbsp; mail@mail.com</p>
                </li>
                <li>
                <p><img src="<?php echo get_template_directory_uri(); ?>/img/icon/phone.png" />&nbsp;(021)12345678</p>
                </li>
                <li>
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="form-search">
                    <div>
                        <input type="text" value="" name="s" id="s" class="input-medium" />
                        <input type="submit" id="searchsubmit" value="Search" class="btn" />
                    </div>
                </form>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- nav -->
    <?php include "nav.php" ?>
    <!-- nav -->
</div><!-- container -->
</header>