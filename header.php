<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MovementMedia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'movementmedia' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="site-logo">
			    <a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home">
			    	<div class="screen-reader-text">
			        	<?php printf( esc_html__('Go to the home page of %1$s', 'popperscores'), $site_title ); ?>
			      	</div>
	      		<?php the_custom_logo(); ?>
			</div>
		<div class="site-branding">
		      <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		      <p class="site-title"><?php bloginfo( 'description'); ?></p>
		</div><!-- .site-branding -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'Primary Menu', 'movementmedia' ); ?>
			</button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

  <!-- add mission tagline -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
