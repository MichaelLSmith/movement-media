<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main class="content-inner full-content-area" role="main">

		<a href="http://<?php the_field('newsletter_url') ?>" target="_blank" rel="bookmark">
			<h5 class="stories-title"><?php the_title(); ?> </h5>
		</a>

			<p>Click on the Newsletter's title to view the Newsletter.</p>



		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
