<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="story-container full-content-area row-bottom-pad">
		<header class="entry-header">
			<?php
				the_title( '<h5 class="pr-story-title">', '</h5>' );
			?>
			<div class="story-meta">
				<span class="story-date">
					<?php echo get_the_date(); ?>
				</span>
			</div>
			<div class="story-sub">
				<?php the_field('story_sub'); ?>
			</div>
		</header><!-- .entry-header -->

			<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'movementmedia' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'movementmedia' ),
					'after'  => '</div>',
				) );
			?>
			</div><!-- .entry-content -->
			<?php echo get_the_tag_list('<div class="post_tags">', '', '</div>'); ?>

			<div class="video-social-media social-share ">

					<a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>"><div class="share-icon"><img src="<?php echo content_url() . '/uploads/2016/10/twitter-e1478996500727.png'?>"
					height="36" width="36" alt="Movement Media logo"></div></a>

					<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class=""><img src="<?php echo content_url() . '/uploads/2016/10/facebook-e1478996492964.png'?>" height="36" width="36" alt="Movement Media logo"></a>

				</div>

	</section>
</article><!-- #post-## -->
