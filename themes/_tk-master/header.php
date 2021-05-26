<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-5 border-warning">
  	<div class="container-fluid">
	  <?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="50px" height="50px" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>
		
		<a class="navbar-brand me-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		
		<p class="site-description lead my-auto border-start border-2 border-warning ms-2 ps-2"><?php bloginfo( 'description' ); ?></p>
			
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
    	<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_id'      => 'navbar-collapse',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'navbar-nav ms-auto mb-2 mb-lg-0',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>
	</div>
</nav>
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<!-- <div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12">
				<div class="site-branding">
					<p class="site-description lead"><?php bloginfo( 'description' ); ?></p>
				</div>
			</div>
		</div>
	</div> .container -->
<!-- </header>#masthead --> 
<!--
<nav class="site-navigation">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="card">
		<div class="row">
			<div class="site-navigation-inner col-sm-12">
				<div class="navbar navbar-dark bg-dark">
					<div class="navbar-header"> -->
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<!--
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						-->
	
						<!-- Your site title as branding in the menu -->
						<!--
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div> -->

					<!-- The WordPress Menu goes here
					<?php wp_nav_menu(
						// array(
						// 	'theme_location' 	=> 'primary',
						// 	'depth'             => 2,
						// 	'container'         => 'nav',
						// 	'container_id'      => 'navbar-collapse',
						// 	'container_class'   => 'collapse navbar-collapse',
						// 	'menu_class' 		=> 'nav navbar-nav',
						// 	'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
						// 	'menu_id'			=> 'main-menu',
						// 	'walker' 			=> new wp_bootstrap_navwalker()
						// )
					); ?>

				</div> --><!-- .navbar
			</div>
		</div>
	</div>--><!-- .container -->
<!--</nav> .site-navigation -->

<div class="main-content" style="min-height: 72.5vh;">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-10 col-md-8">

