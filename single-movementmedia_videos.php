<?php
/**
 * Template Name: Videos
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main class="content-inner" role="main">
			<p>This is the single video template</p>

            <?php
				setup_postdata( $post );
			 	the_content();
			 ?>








		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
