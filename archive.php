<?php
/**
 * The template for displaying archive pages.
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
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="stories-container boxlist-2col-flex">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

				/*
				I don't think we need to load a template part. Except if category uses this such as newsletter or press release.

				Separate template(or part) for tags??

				We just want to display the title(and bi-line) and custom excerpt of stories.

				For videos, we want to display the title and the video.
				*/

				// the_title( '<h5 class="video-title text-content-area"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );

				if ( get_post_type() == 'movementmedia_videos' ):
					get_template_part( 'template-parts/content', 'movementmedia_videos' );

				else:

					get_template_part( 'template-parts/content', 'story_preview' );

				endif;
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

?>
</div>
<?php

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
