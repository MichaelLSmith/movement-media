<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h6 class="page-title screen-reader-text"><?php single_post_title(); ?></h6>
				</header>

			<?php endif; ?>
			<h3 class="entry-title">Movement Stories</h3>
			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
			<section class="full-content-area">
				<div class="stories-title text-content-area">
					<?php the_title('<h6><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h6>' );
					the_category(' ');
					the_author();
					echo get_the_date();
					?>

					<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail('thumbnail');
					endif;
					?>
				</div>

			</section>
			<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
