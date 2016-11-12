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
	<section class="story-container full-content-area">
		<header class="entry-header">
			<?php
				the_title( '<h5 class="story-title">', '</h5>' );
			?>
			<div class="story-sub">
				<?php the_field('story_sub'); ?>
			</div>
			<?php
			if ( 'post' === get_post_type() ) : ?>
			<div class="posted-on">
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
		</section>

	<footer class="entry-footer">
		<?php movementmedia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
