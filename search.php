<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package MovementMedia
 */

get_header(); ?>

	<section id="primary" class="content-area full-content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'movementmedia' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
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

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

	?>
	</div>
	<?php

			endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
