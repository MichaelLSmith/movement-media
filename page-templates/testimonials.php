<?php
/**
 * Template Name: Testimonials
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area"> -->
		<main class="content-inner" role="main">
			<article class="testimonials-outer-container">
				<section class="entry-title-container full-content-area">
					<!-- might need to add a div here to help control width of title -->
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</section>

                <section class="testimonial-intro bold-lead-paragraph full-content-area">
					<div class="about-mission-inner bold-lead-paragraph-inner">
						<?php the_field('testimonials_introduction'); ?>
					</div>
				</section>

				<section class="testimonials-list full-content-area row-bottom-pad">
					<?php if( have_rows('testimonials_list') ): ?>
						<?php while( have_rows('testimonials_list') ): the_row();

						// vars
						$image = get_sub_field('testimonial_image');

						?>

                <div class="testimonial testimonial-flex">
							    <?php if( $image ): ?>
							    <div class="testimonial-image bio-image-container">
							        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							    </div>
							    <?php endif; ?>
							    <div class="testimonial-biline">
											<div class="testimonial-biline-text">
									        <div class="testimonial-name">
									            <h4><?php the_sub_field('testimonial_name');?></h4>
									        </div>
									        <div class="testimonial-title">
									            <h4><?php the_sub_field('testimonial_title');?></h4>
									        </div>
											</div>
                                  <a href="<?php //echo the_sub_field('testimonial_url');?>"></a>
							    </div>
                  <div class="testimonial-text">
                      <?php the_sub_field('testimonial_text');?>
                  </div>
                </div>
                    <?php endwhile;//testimonials_list ?>
					<?php endif;//testimonials_list ?>
				</section>
			</article>

<!-- Thou surly doghearted bladder! Thou wimpled pox-marked whey-face! Thou qualling milk-livered measle! You are a tosser, wanker, git and mankey! A nutter, a lazy sod, a cream faced loon! Thou art as loathsome as a toad. Peace, ye fatguts! I do desire we may be better strangers.  Thou art a flesh-monger, fool and coward. You scullion, your rampillian, you fustilarian. I’ll tickle your catastrophe. Thou art as fat as butter. -->



		</main><!-- #main -->
	<!-- </div><! #primary -->
</div><!-- #content -->
<?php
get_footer();
