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
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

<section>
	<?php

		//from https://www.advancedcustomfields.com/resources/post-object/
		$post_object = get_field('featured_video');

		if( $post_object ):

			// override $post
			$post = $post_object;
			setup_postdata( $post );

	?>
		<div>
			<?php the_field('video_url'); ?>
		</div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
	</section>
<section>
	<!-- 3 stories here: -->
		<?php
			$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
			$postslist = get_posts( $args );
			foreach ( $postslist as $post ) :
			  setup_postdata( $post ); ?>
				<div>
					<?php the_date(); ?>
					<br />
					<?php the_title(); ?>
					<?php the_excerpt(); ?>
				</div>
			<?php
			endforeach;
			wp_reset_postdata();
		?>

	</section>

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
