<?php
/**
 * Template Name: Giving
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area"> -->
		<main class="content-inner" role="main">
			<article class="about-outer-container">
				<section class="entry-title-container full-content-area">
					<!-- may want to add a div to help control width of title -->
					<?php the_title('<h1 class="entry-title">', '</h1>' ); ?>
				</section>
				<section class="mission full-content-area">
					<div class="mission-inner bold-lead-paragraph">
						<?php the_field('social_intro'); ?>
					</div>
				</section>
				<?php if( get_field('main_image') ): ?>
					<section class="main-image full-content-area">
						<div class="image-content-area">
							<img src="<?php the_field('social_main_image');?>" alt="" />
						</div>
				<?php endif;?>
					</section>
				<section class="description full-content-area">
					<?php if( get_field('giving_second_paragraph') ): ?>
					<div class="description text-content-area">
							<?php the_field('giving_second_paragraph'); ?>
					<?php endif; ?>
					</div>
				</section>
				<section class="what full-content-area">
					<div class="exist text-content-area">
						<h2 class="blue-heading">We Exist To:</h2>
							<?php if( have_rows('we_exist_list') ): ?>
								<ul>
								<?php while ( have_rows('we_exist_list') ) : the_row(); ?>
								<li>
							        <?php the_sub_field('exist_bullet_point'); ?>
								</li>
								<?php
							    endwhile;
							endif;
							?>

					</div><!-- exist -->
				</section>
				<section class="full-content-area">
					<div class="text-content-area">
						<h2 class="blue-heading">Social Balance</h2>
						<?php if( get_field('social_balance_text') ): ?>
							<?php the_field('social_balance_text'); ?>
						<?php endif;?>
					</div>
	    		</section>
				<section class="full-content-area">
					<div class="text-content-area">
						<h3 class="blue-heading">Social Giving</h3>
						<?php if( get_field('social_giving_introduction') ): ?>
							<?php the_field('social_giving_introduction'); ?>
						<?php endif;?>
					</div>
				<section class="full-content-area">

					<?php
					if( have_rows('partner_row') ):// repeater
					    // echo "<p>in if partner row</p>";
					    while ( have_rows('partner_row') ) : the_row(); ?>


					        <?php while (has_sub_field('social_giving_partners'))://flex content
					            // echo "<p>in while social_giving_partners</p>";
					            if (get_row_layout() == 'year_heading')://layout - year
										?>
											<h5><?php the_sub_field('row_year'); ?> </h5>
											<article class="giving-partner-row">
										<?php
					            endif;//year_heading
					            if(get_row_layout('social_giving_partner')):
									?>

										<div class="giving-partner-inner">
											<?php
											$image = get_sub_field('giving_image');?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<div class="giving-name">
												<?php
												the_sub_field('giving_name'); ?>
											</div>
											<div class="giving_partner_description">
											    <?php
													the_sub_field('giving_partner_description'); ?>
											</div>
											<div class="learn">
													<?php
													the_sub_field('giving_learn_more'); ?>
											</div>
	 									</div>
											<?php
													endif;//social giving partner
											endwhile;//social_giving_partners
											?>
										</article>
					<?php
					    endwhile;//partner_row
					endif;//have_rows (partner_row)
					?>

					</section>
<!-- There’s no more faith in thee than a stewed prune. Thou art a boil, a plague sore, an embossed carbunkle in my corrupted blood. Away you three inch fool! Thou art a natural coward without instinct. You, minion, are too saucy. Thou art the best of cutthroats. A weasel has not such a spleen as you are toss’d with. Your virginity breeds mites, much like a cheese. Thou leathern-jerkin, crystal button, knot-pated, agatering, puke-stocking, caddis-garter, smooth tongue, Spanish pouch. Thou art the son and heir of a mongrel bitch. -->



			</article>
		</main><!-- #main -->
	<!-- </div><! #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
