<?php
/**
 * The template for static front page.
 *
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

// get_header(); ?>

<!DOCTYPE html>
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

	<header id="home-masthead" class="home-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'Primary Menu', 'movementmedia' ); ?>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<section class="logo-tag-container">
			<div class="site-logo">
				<a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home">
		    	<div class="screen-reader-text">
		        	<?php printf( esc_html__('Go to the home page of %1$s', 'movementmedia'), $site_title ); ?>
		      	</div>
	      		<?php the_custom_logo(); ?>
			</div>

			<div class="site-branding">
			      <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			      <p class="site-title"><?php bloginfo( 'description'); ?></p>
			</div><!-- .site-branding -->
		</section>
	</header><!-- #masthead -->

	<div id="content" class="site-content">


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/front', 'main' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
