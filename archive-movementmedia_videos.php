<?php
/**
 * The template for displaying videos archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area full-content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="entry-title">Video Projects</h1>
			</header><!-- .page-header -->
			<section class="videos-intro bold-lead-paragraph">
				<div class="videos-intro-inner bold-lead-paragraph-inner">
					<?php the_field('videos_intro'); ?>
					<p>Movement Media produces high-impact videos and movies to educate, inspire, and engage audiences on critical issues. We’ve filmed projects all over the world, including in small villages in Ghana, on coconut farms in Sri Lanka, at organic cotton fields in Nicaragua, and around the United States. </p>
				</div>
			</section>

		<div class="video-wrap">
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
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
