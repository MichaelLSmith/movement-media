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
		$custom_stories = array();

		$left_story = get_field('story_left');
		$centre_story = get_field('story_centre');
		$right_story = get_field('story_right');

		if($left_story) :
			array_push($custom_stories, $left_story);
			echo 'in left_story if: custom stories array: ';
			echo count($custom_stories);
		endif;

		//get all the custom stories. Check if there is a custom story left, centre, right. For each one that exists, push that story post object into the array.
		if($centre_story) :
			array_push($custom_stories, $centre_story);
			echo 'in centre_story if: custom stories array: ';
			echo count($custom_stories);
		endif;

		if($right_story) :
			array_push($custom_stories, $right_story);
			echo 'in right_story if: custom stories array: ';
			// print_r($custom_stories);
			echo count($custom_stories);
		endif;

		//print out custom stories
		if( $custom_stories ) :
			foreach ($custom_stories as $post) :
				setup_postdata($post);
				the_permalink();
				the_title();
			endforeach;
		endif;

		//check length of custom stories array. Use this value to determine how many recent stories to print below.
		$custom_count = count($custom_stories);

		echo "custom count";
		echo $custom_count;

		if($custom_count > 0) :
			echo 'in custom_count if';
			$num = 3 - $custom_count;
			echo '$num';
			echo $num;

	//print most recent stories
			$args = array( 'posts_per_page' => $num, 'order'=> 'DESC', 'orderby' => 'date' );
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
		endif;
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
