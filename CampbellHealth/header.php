<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Armstrongest
 */
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="campbellhealth-ca" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Gary Armstrong">
	<meta name="Copyright" content="Copyright Gary Armstrong 2013. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Campbell Health">
	<meta name="DC.subject" content="<?php bloginfo('description'); ?>">
	<meta name="DC.creator" content="Gary Armstrong (armstrongest.com)">
	
	<meta name="viewport" content="initial-scale=1,width=device-width">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-ie8.css">
	<![endif]-->

	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<!--div id="page-wrap"> not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

		<header class="site-header">
		<div class="main-contact-info">
			<a href="<?php echo get_field('booking_link', 'option'); ?>" class="button button-appointment-pinned"><span class="icon-calendar" aria-hidden="true"></span><?php echo get_field('booking_link_text', 'option'); ?></a>
			<?php //<!-- p class="phone-info">Give us a call<span class="phone-number">604 210 4696</span></p --> ?>
		</div>

		<h1 class="the-site-title">

<?php // Get the global site logo
	$sitelogo = get_field('site_logo', 'option'); ?>
	<a class="site-image" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
		<?php if ( $sitelogo  ) : ?>
		<img src="<?php echo $sitelogo['url']; ?>" 
			class="header-image" 
			width="<?php echo ($sitelogo['width']/2) ?>" 
			height="<?php  echo ($sitelogo['height']/2); ?>" 
			alt="<?php bloginfo( 'description' ); ?>" 
			style="max-width: <?php echo ($sitelogo['width']/2); ?>px"/>
	<?php endif; ?>
			</a>
	
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				
	
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<!-- h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3 -->
		<a class="screen-reader-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>			
	</nav><!-- #site-navigation -->

	<nav class="main-nav">
		<?php $params = array(
			//'theme_location' => 'primary',
			'menu' 		=> 'Main Nav Menu',
			'container' => false,
		);
		wp_nav_menu($params); ?>
	</nav>
	<?php 
	//wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-nav' ) );  ?>
</header>	
<?php get_template_part( 'content', 'mainbanner' ); ?>
