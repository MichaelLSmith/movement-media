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
				<h3 class="entry-title">Movement Highlights</h3>
			</header><!-- .page-header -->
			<div class="stories-container boxlist-2col-flex">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				if ( get_post_type() == 'movementmedia_videos' ):
					get_template_part( 'template-parts/content', 'movementmedia_videos' );

				else:

					get_template_part( 'template-parts/content', 'story_preview' );

				endif;
			endwhile;

			the_posts_pagination( array( 'mid_size'  => 2 ) );

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
get_footer();
