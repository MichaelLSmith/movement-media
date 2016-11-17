<?php
/**
 * Template part for displaying videos post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
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

						<div class="video-credits">
					<?php
						the_field('credits');
						?>
					</div>
					<?php
					echo get_the_term_list( $post->ID, 'post_tag', $before = '<div class="post_tags">', $sep = '', $after = '</div>' );
					?>
						<?php
						// echo get_the_tag_list('<div class="post_tags">', '', '</div>'); ?>

					<section class="video-social-media social-share">
						<?php if( have_rows('video_social_media') ): ?>
							<?php while( have_rows('video_social_media') ): the_row();

							// vars
							$image = get_sub_field('video_social_image');
							$link = get_sub_field('social_media_share');

							?>
							<div class="video-social-group social-share-group">
								<?php if( $link ): ?>
									<a href="<?php echo $link; ?>">
								<?php endif; ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
								<?php if( $link ): ?>
									</a>
								<?php endif; ?>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>
		</div><!-- .video-indiv-->


	</article><!-- #post-## -->
