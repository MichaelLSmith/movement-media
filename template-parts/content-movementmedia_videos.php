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
				the_title( '<h5 class="video-title">', '</h5>' );

				the_field('video_description'); ?>

				<div class="video-credits">
					<?php the_field('credits');?>
				</div>
				<div class="video-client"><?php echo get_the_term_list( $post->ID, 'client-name', $before = 'Client: ', $sep = '', $after = '' ); ?></div>


				<?php
					echo get_the_term_list( $post->ID, 'post_tag', $before = '<div class="post_tags">', $sep = '', $after = '</div>' );
				?>

			<section class="video-social-media social-share">

					<a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>"><div class="share-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/10/twitter-e1478996500727.png" height="36" width="36" alt="Movement Media logo"></div></a>

					<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class=""><img src="http://movementmedia.dev/wp-content/uploads/2016/10/facebook-e1478996492964.png" height="36" width="36" alt="Movement Media logo"></a>
				<div class="video-social-group social-share-group">

				</div>

		</section>

		</div><!-- .video-indiv-->


	</article><!-- #post-## -->
