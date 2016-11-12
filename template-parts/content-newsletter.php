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
			<p>
				top of newsletter template
			</p>
			<?php

			$post_object = get_field('news_short_code');

			echo '<pre>';
		    print_r( $post_object );
			echo '</pre>';
			// die;


			if( $post_object ):

				// override $post
				$post = $post_object;
				setup_postdata( $post );

				the_content();

				?>






			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
