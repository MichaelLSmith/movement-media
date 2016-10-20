<?php
/**
 * Template part for displaying page content in on front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header"> -->
		<?php
		// the_title( '<h1 class="entry-title">', '</h1>' );
		?>

	<!-- </header> -->

<section class="featured-video">
	<h5>MOVEMENT VIDEOS</h5>
	<?php
		//from https://www.advancedcustomfields.com/resources/post-object/
		$post_object = get_field('featured_video');
		if( $post_object ):

			// override $post
			$post = $post_object;
			setup_postdata( $post );
	?>
		<div class="embed-container">
			<?php
			the_field('video_url'); ?>
		</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</section>
	<p class="front-more-link"><a href="<?php echo get_post_type_archive_link( 'movementmedia_videos' ); ?>">SEE ALL OUR VIDEOS</a></p>
<h5>MOVEMENT STORIES</h5>
<!-- change -->
<section class="featured-stories">
	<!--
	What if it's post with a video or without an image? Probably always going to have an image
	If it's a post with a video in it, I don't know how to get the video to be a preview here. It's a post embedded in the post. We could have an image (screencapture or a better quality image associated with the film) similar to a reg post with a featured image.
	ultimate question: do we want videos in the featured stories section?
 -->
	<!-- Left story here: -->
	<!-- change -->
	<?php
		$story_location = 'story_left';
		//from: http://wordpress.stackexchange.com/questions/41610/variable-use-in-get-template-part?rq=1
		require(locate_template('template-parts/front-story.php', $load));
	?>
	<!-- centre story here: -->
	<?php
		$story_location = 'story_centre';
		require(locate_template('template-parts/front-story.php', $load));
	?>
	<?php
		$story_location = 'story_right';
		require(locate_template('template-parts/front-story.php', $load));
	?>
</section> <!-- Stories End -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'movementmedia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'movementmedia' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
