<?php
/**
 * Template part for displaying videos post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="video-indiv">
				<?php
				the_content();
				?>

				<?php
				the_title( '<h5 class="video-title">', '</h5>' );
				?>
				<?php
					the_field('video_description');
					echo get_the_term_list( $post->ID, 'client-name', $before = 'Client: ', $sep = '', $after = '' );
					?>
		</div><!-- .video-indiv-->


	</article><!-- #post-## -->
