<?php
/**
 * The template for displaying videos archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Our Videos</h1>
				<?php
					//check the query to WP Database
					$current_term = get_queried_object();

					print_r($current_term);


					//check which taxonomy is being searched. And get the term.
					$taxonomy = get_taxonomy($current_term->taxonomy);
					echo $taxonomy->label . ': ' . $current_term->name;

				?>



			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-movementmedia_videos', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
