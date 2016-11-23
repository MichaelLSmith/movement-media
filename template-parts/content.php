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
	<header class="entry-header full-content-area">
		<?php


		if ( is_single() ) : ?>
			<div class="story-heading">
				<?php
			if ( has_post_thumbnail() ) :
				the_title( '<h5 class="story-title text-content-area">', '</h5>' );
				// check if the post or page has a Featured Image assigned to it.
				the_post_thumbnail();

			else:
				the_title( '<h5 class="pr-story-title text-content-area">', '</h5>' );

			endif;
			?>
			</div>
			<?php
		else :

			the_title( '<h5 class="video-title text-content-area"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'thumbnail' );
			endif;

		endif;
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta text-content-area">

			<div class="indiv-story-meta">
				<span class="story-author">
				<?php the_author(); ?>,
				</span>
				<span class="story-date">
					<?php echo get_the_date(); ?>
				</span>
			</div>



		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="story-content full-content-area">

		<section class="stories-content text-content-area">
		<?php
		the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'movementmedia' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			$post_object = get_field('video_reg_post');

			if($post_object) :
			//override $post
			$post = $post_object;
			setup_postdata( $post );

			the_content();

			wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
			 endif;
		?>
	</section>
	<section class="stories-social-share text-content-area row-bottom-pad">
		<div class="post_tags">
				<?php echo get_the_tag_list('<div class="post_tags">', '', '</div>'); ?>
		</div>
				<div class ="social-share">
							<a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>">
									<div class="share-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/10/twitter-e1478996500727.png" height="36" width="36" alt="Movement Media logo">
									</div>
									<span class="share-icon-text">Share on Twitter</span>
							</a>
			  </div>
				<div class ="social-share">
							<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="">
									<div class="share-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/10/facebook-e1478996492964.png" height="36" width="36" alt="Movement Media logo"></div>
									<span class="share-icon-text">Share on Facebook</span>
							</a>
				</div>



		</section>

	</div>


		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'movementmedia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
