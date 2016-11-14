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

				<div class="contact-form">
					 <?php the_field('contact_form'); ?>
			 </div>

				<section class="contact-group">
						<div class="content-address">
							<?php the_field('contact_phone_number');?>
						</div>
						<div class="content-address">
							<?php the_field('contact_organization_name');?>
						</div>
						<div class="content-address">
							<?php the_field('contact_street_address');?>
						</div>
						<div class="content-address">
							<?php the_field('contact_city');?>
						</div>
						<div class="content-address">
							<?php the_field('contact_zip_code');?>
						</div>
				</section>



				<section class="contact-social-media row-bottom-pad">
					<?php if( have_rows('contact_social_media') ): ?>
						<?php while( have_rows('contact_social_media') ): the_row();

						// vars
						$image = get_sub_field('contact_social_image');
						$link = get_sub_field('contact_social_url');

						?>
						<div class="contact-social-group">
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
