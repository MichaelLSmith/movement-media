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

		if ( is_single() ) :
			the_title( '<h5 class="story-title text-content-area">', '</h5>' );
			// check if the post or page has a Featured Image assigned to it.
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		//if - is single cont...
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'thumbnail' );
			endif;

		endif;
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta full-content-area">
			<div class="story-posted-on text-content-area">
				<?php movementmedia_posted_on(); ?>
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
		<div class="embed-container story-video">
			<?php the_field('video_url'); ?>
		</div>
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
		</section>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'movementmedia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php movementmedia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
