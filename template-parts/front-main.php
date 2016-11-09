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

		<section class="featured-video row-bottom-pad">
			<div class="inner-featured-video full-content-area">
				<h3 class="blue-heading">Movement Videos</h3>
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
					<p class="front-more-link">
						<a href="<?php echo get_post_type_archive_link( 'movementmedia_videos' ); ?>">SEE ALL OUR VIDEOS</a>
					</p>
			</div><!-- .inner-featured-video -->
		</section>



		<section class="featured-stories row-tb-pad clear">
			<div class="inner-featured-stories full-content-area">
				<h3 class="blue-heading">Movement Stories</h3>
				<div class="home-flex-container">
						<?php
							$story_location = 'story_left';
							$background_color = '-grey';
							//from: http://wordpress.stackexchange.com/questions/41610/variable-use-in-get-template-part?rq=1
							require(locate_template('template-parts/front-story.php'));
						?>
						<!-- centre story here: -->
						<?php
							$story_location = 'story_centre';
							$background_color = '-blue';
							require(locate_template('template-parts/front-story.php'));
						?>
						<?php
							$story_location = 'story_right';
							$background_color = '-grey';
							require(locate_template('template-parts/front-story.php'));
						?>
					</div><!-- .home-flex-container -->
				<p class="front-more-link full-content-area">
					<a href="http://localhost:8080/stories/">ALL STORIES</a>
				</p>
			</div><!-- .inner-featured-stories -->
		</section> <!-- Stories End -->




		<?php if( get_field('front_quote_1') ): ?>
			<section class="front-quote row-tb-pad">
				<div class="inner-front-quote full-content-area">
					<div class="quote-content-area row-tb-pad">
						<?php the_field('front_quote_1') ?>
					</div>
			</div>
			</section>
		<?php endif;?>





		<section id="highlights" class="movement-highlights row-tb-pad">
			<div class="inner-highlights full-content-area">
				<h3 class="blue-heading">Movement Highlights</h3>
				<div class="home-flex-container">
					<?php
						//from: http://wordpress.stackexchange.com/questions/41610/variable-use-in-get-template-part?rq=1
						$highlight = 'highlight_page_up_left';//control which acf field to pull in;
						//control which sector html lands in:
						$x_axis = 'left';
						$y_axis = 'upper';
						require(locate_template('template-parts/front-highlight.php'));
					?>
					<?php
						$highlight = 'highlight_page_up_right';
						$x_axis = 'right';
						$y_axis = 'upper';
						require(locate_template('template-parts/front-highlight.php'));
					?>

					<?php
						$highlight = 'highlight_page_lower_left';
						$x_axis = 'left';
						$y_axis = 'lower';
						require(locate_template('template-parts/front-highlight.php'));
					?>
					<?php
						$highlight = 'highlight_page_lower_right';
						$x_axis = 'right';
						$y_axis = 'lower';
						require(locate_template('template-parts/front-highlight.php'));
					?>
				</div>
			</div><!-- .inner-highlights -->
		</section>
		<?php
		 wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
		 // print_r($post) ?>



		 <?php if( get_field('front_quote_2') ): ?>
 			<section class="front-quote row-tb-pad">
 				<div class="inner-front-quote full-content-area">
 					<div class="quote-content-area row-tb-pad">
 						<?php the_field('front_quote_2') ?>
 					</div>
 			</div>
 			</section>
 		<?php endif;?>


	</div><!-- .full-width-content -->


</article><!-- #post-## -->
