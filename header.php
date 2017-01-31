<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Silfurgen
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/languages.min.css">


 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'silfurgen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="500">
		        <div class="container">
		            <div class="navbar-header page-scroll">
		                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button> -->

	                    <a class="navbar-toggle language-link" href="http://silfurgen.com/is/" rel="is-IS"><span class="lang-sm flag" lang="is"></span></a>
		              

		                <a class="navbar-brand page-scroll" rel="home" href="#intro" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	                	<?php bloginfo( 'name' ); ?>
	              		</a>

		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse navbar-ex1-collapse">
		                <ul class="nav navbar-nav navbar-right">
		                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
		                    <li class="hidden">
		                        <a class="page-scroll" href="#page-top"></a>
		                    </li>
		                    <li>
		                        <a id='about-link' class="page-scroll" href="#about">ABOUT</a>
		                    </li>
		                    <li>
		                        <a id='services-link' class="page-scroll" href="#services">SERVICES</a>
		                    </li>
		                    <li>
		                        <a id='contact-link' class="page-scroll" href="#contact">CONTACT</a>
		                    </li>
		                    <li><a class="language-link" href="http://bouncingballonline.com/is/" rel="is-IS"><span class="lang-sm flag" lang="is"></span></a></li>
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>

		</header><!-- #masthead -->

	<div id="content" class="site-content">

