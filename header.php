<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package OysterPointDragons
 * @subpackage Oyster_Point_Dragons
 * @since Oyster Point Dragons 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
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
</head>
<body <?php body_class(); ?>>
	
<!-- Class: site gives a white background -->
<!-- Added to navigation bar -->
<div id="page" class="hfeed">
	<header id="masthead" class="site-header" role="banner">

	<a href="http://52.35.169.165">
		<img class="img-container" src="logos/main-logo.png">
		</a>

		<p class="login"><a href="http://52.35.169.165/blog/wp-login.php" class="btn btn-primary" role="button">Log In</a> 
		<a href="#" class="btn btn-default" role="button">Register</a></p>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'oysterpointdragons' ); ?></button>

			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'oysterpointdragons' ); ?>"><?php _e( 'Skip to content', 'oysterpointdragons' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="main" class="wrapper">
