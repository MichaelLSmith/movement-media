<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area"> -->
		<main class="content-inner" role="main">
			<article class="contact-outer-container full-content-area">
				<section class="entry-title-container">
					<!-- might need to add a div here to help control width of title -->
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</section>

				<div class="contact-intro bold-lead-paragraph">
					<div class="bold-lead-paragraph-inner"><?php the_field('contact_intro'); ?></div>
				</div>

				<section class="contact-main-image main-image">
						<img src="<?php the_field('contact_main_image');?>" alt="" />
				</section>



				<div class="contact-form text-content-area">
					 <?php the_field('contact_form'); ?>
			 </div>

				<section class="contact-social-media row-bottom-pad">
					<?php if( have_rows('contact_social_media') ): ?>
						<?php while( have_rows('contact_social_media') ): the_row();

						// vars
						$image = get_sub_field('contact_social_image');
						$link = get_sub_field('contact_social_url');

						?>
						<div class="contact-social-group text-content-area">
							<span class="share-icon-text">Movement Media on Twitter:</span>
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

				</section>



			</article>
		</main><!-- #main -->
	<!-- </div><! #primary -->


</div><!-- #content -->
<?php

get_footer();
