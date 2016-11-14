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

		$post_object = get_field('video_reg_post');
		if ( is_single() ) : ?>
			<div class="story-heading">
				<?php
			the_title( '<h5 class="story-title text-content-area">', '</h5>' );
			// check if the post or page has a Featured Image assigned to it.
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
			?>
			</div>
			<?php
		//if - is single cont...
		else :

			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'thumbnail' );
			endif;

		endif;
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta text-content-area">

			<div class="story-meta">
				<span class="story-author">
			<?php
				the_author();
				?>,
			</span>

				<span class="story-date">
					<?php
					echo get_the_date();
					?>
				</span>
			</div>



		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="story-content full-content-area">
		<?php if($post_object) :
			//override $post
			$post = $post_object;
			setup_postdata( $post );
		?>
	
		<?php
			wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
		 endif;
		 ?>

		<section class="stories-content text-content-area">
		<?php
		the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'movementmedia' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
		<div class="post-social-media social-share">
			<?php if( have_rows('post_social_media') ): ?>
				<?php while( have_rows('post_social_media') ): the_row();

				// vars
				$image = get_sub_field('post_social_image');
				$link = get_sub_field('post_media_share');

				?>
				<div class="post-social-group social-share-group">
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
		</div>

		</section>




		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'movementmedia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
