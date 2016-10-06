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
	<header class="entry-header">
		<?php

		$post_object = get_field('video_reg_post');

		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			// check if the post or page has a Featured Image assigned to it.
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;

			if($post_object) :
				//override $post
				$post = $post_object;
				setup_postdata( $post );
		?>
				<div>
					<?php the_field('video_url'); ?>
				</div>

				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
				?>
		<?php
			endif;
		//if - is single cont...
		else :
			// check if the post or page has a Featured Image assigned to it.
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'thumbnail' );
			endif;

		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php movementmedia_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
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

	<footer class="entry-footer">
		<?php movementmedia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
