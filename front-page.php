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
		<div id="header-inner" class="home-header-content clear">
			<section class="home-nav">
				<!-- <div class="logo-tag-container"> -->
					<div class="site-logo">
						<a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home">
						<div class="screen-reader-text">
							<?php printf( esc_html__('Go to the home page of %1$s', 'movementmedia'), $site_title ); ?>
						</div>
							<?php $image = get_field('home_logo');?>
						<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
						</a>
						</div>
				<!-- </div> -->
				<div class="menu-with-button"><i id="menu-button" class="menu-toggle fa fa-bars" aria-hidden="true" aria-controls="primary-menu" aria-expanded="false">
				</i>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu_class' => 'main-nav-ul', 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
			</section>
<div class="home-masthead">
			<section class="home-masthead-1 full-content-area">
				<p class="large-text">
					<?php if( get_field('front_header_text_left') ): ?>
						<?php the_field('front_header_text_left'); ?></p>
					<?php endif; ?>
				<?php if( get_field('front_header_icon') ): ?>
					<div class="front-icon-container">
						<img class="icon" src="<?php the_field('front_header_icon');?>" alt="">
					</div>
				<?php endif; ?>
				<?php if( get_field('front_header_text_right') ): ?>
					<p class="large-text"><?php the_field('front_header_text_right'); ?></p>
				<?php endif;?>
			</section>
			<?php if( get_field('front_header_paragraph') ): ?>
				<section class="home-masthead-2 full-content-area">
					<p class="text text-content-area"><?php the_field('front_header_paragraph'); ?></p>
				</section>
			<?php endif;?>
			<?php if( get_field('front_header_action_button') ): ?>
				<section class="home-masthead-3">
					<div class="action-btn action-btn-large">
						<a href="<?php the_field('front_header_action_button'); ?>">Learn more</a>
					</div>
				</section>
</div>
			<?php endif;?>
		</div><!-- #header-inner -->
	</header><!-- #masthead -->




	<div id="content" class="">

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
</div><!-- #content -->
<?php
get_footer();
