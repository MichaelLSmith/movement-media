<?php
/**
* Template Name: Partners
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<!-- <p style="color:red;">start of div primary</p> -->
		<main id="main" class="site-main" role="main">
		<!-- Content Starts -->

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="partners-image">
					<!-- <p style="color:yellow;"> large image here </p> -->
					<?php if( get_field('full_sized_image') ): ?>
						<img src="<?php the_field('full_sized_image'); ?>" />
					<? endif;?>
				</div>
				<?php if( get_field('partners_mission') ): ?>
					<div class="partners-mission">
						<?php the_field('partners_mission') ?>
					</div>
				<? endif;?>
				<nav class="clients-nav">
					<h6>Clients Menu</h6>
					<ul>
						<li><a data-scroll data-options='{ "easing": "linear" }' href="#dr-bronner">Dr Bronner's</a></li>
						<li><a data-scroll data-options='{ "easing": "linear" }' href="#vote-hemp">Hemp Industry</a></li>
						<li><a data-scroll data-options='{ "easing": "linear" }' href="#fair-world">Fairworld Project</a></li>
					</ul>
		<!-- href="https://github.com/cferdinandi/smooth-scroll">GitHub</a></p> -->
					<hr>
				</nav>
				<section id="dr-bronner">
					<div class="partner-title-group">
					<?php if( get_field('bronner_title_image') ): ?>
						<div class="partner-title-image">
							<img src="<?php the_field('bronner_title_image') ?>" alt="" />
						</div>
					<?php endif;?>
					<?php if( get_field('bronner_partner_name') ): ?>
						<h3><?php the_field('bronner_partner_name') ?></h3>
					<?php endif;?>
					<?php if( get_field('bronner_partner_description') ): ?>
						<p><?php the_field('bronner_partner_description') ?> </p>
					<?php endif;?>
					</div>
					<div class="partner-content-group">
						<?php if( get_field('bronner_do_title') ): ?>
							<h3><?php the_field('bronner_do_title') ?></h3>
						<?php endif;?>
						<?php if( get_field('bronner_description_what') ): ?>
							<?php the_field('bronner_description_what') ?>
						<?php endif;?>
					</div>
					<div class="partner-gallery">
						<!-- <p style="color:yellow;"> change </p> -->
						<?php
							$images = get_field('bronner_image_gallery');
							if( $images ):
						?>
							<ul>
								<?php
									foreach( $images as $image ): ?>
									<li>
										<a href="<?php echo $image['url']; ?>">
											 <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php
											 echo $image['alt']; ?>" />
										</a>
										<p><?php echo $image['caption']; ?> </p>
									</li>
								<?php
									endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
					<?php
					$repeater = 'bronner_media_placements';
					$sub_field = 'bronner_media_placement';
					require(locate_template('template-parts/bronner-media-placement.php', $load));
					?>

					<?php
					$repeater = 'bronner_services_provided';
					$sub_field = 'bronner_services_provided';
					require(locate_template('template-parts/bronner-media-placement.php', $load));
					?>

					<?php
					$repeater = 'bronner_supported_campaigns';
					$sub_field = 'bronner_supported_campaign';
					require(locate_template('template-parts/bronner-media-placement.php', $load));
					?>
					<p><a data-scroll data-options=
						'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>

				</section><!-- #dr bronner -->
				<!-- <div id="vote-hemp"> -->
					<?php
						$count = 0;
						if( have_rows('other_partners') ):
							while ( have_rows ('other_partners') ): the_row();
								$count = $count + 1;
								?><section id="partner-<?php echo $count?>">
									<p>div in while starts</p>

									<!-- <p style="color:purple">change</p> -->

								<?php
								if(get_row_layout() == 'partner_name_group'):
									?>
									<h3><?php the_sub_field('partner_name');?></h3>
									<?php
										while(has_sub_field('partner_content_group_flex')):
											if(get_row_layout() == "partner_content_group"):

												?>
												<img
													src="<?php the_sub_field('partner_image');?>" alt="" />
												<h3><?php the_sub_field('partner_heading');?></h3>
												<?php the_sub_field('partner_description');
											endif;//get_row_layout partner_content_group
										endwhile;//have_rows(partner_content_group_flex)
										?>
										<h3><?php the_sub_field('do_partner')?></h3>
										<?php the_sub_field('description_what');

										$repeater = 'partner_media_placements';
										$sub_field = 'partner_media_placement';
										require(locate_template('template-parts/partner-media-placement.php', $load));

										$repeater = 'partner_services_provided';
										$sub_field = 'partner_service_provided';
										require(locate_template('template-parts/partner-media-placement.php', $load));

										$repeater = 'partner_supported_campaigns';
										$sub_field = 'partner_campaign_supported';
										require(locate_template('template-parts/partner-media-placement.php', $load));



								endif;//get_row_layout(partner_name_group)

								?>	<p>div in while ends here</p>
							</section><!-- #partner end -->
								<?php
							endwhile;//have_rows('other_partners')
						endif;//have_rows('other_partners')
					?>
					<!-- <p><a data-scroll data-options=
						'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
				 -->
<!--



				<div id="fair-world">Fairworld Project
					<p><a data-scroll data-options=
						'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
					</div>
				<p id="bottom"><a data-scroll data-options=
					'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p> -->

		</main><!-- #top -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
