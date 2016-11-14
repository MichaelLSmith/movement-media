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

<!-- div.site-content in header.php -->

	<!-- <div id="primary" class="content-area"> -->

		<main id="main" class="site-main" role="main">
		<!-- Content Starts -->
		<article class="partners-outer-container">
			<section class="entry-title-container full-content-area">
				<!-- might need to add a div here to help control width of title -->
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</section>
			<section class="partners-image full-content-area">
				<div class="image-content-are">
				<?php
				 if( get_field('full_sized_image') ): ?>
					<img src="<?php the_field('full_sized_image'); ?>" />
				<?php endif;?>
			</div>
			</section>
			<section class="partners-upper-content full-content-area row-bottom-pad">
				<?php
				 if( get_field('partners_mission') ): ?>
					<div class="partners-mission text-content-area">
						<?php the_field('partners_mission') ?>
					</div>
				<?php endif;?>
				<?php if( have_rows('partners_menu_items') ): ?>
				<nav class="partners-nav">
					<!-- <h6>Clients Menu</h6> -->
					<ul class="partners-nav-list text-content-area">
						<li><a data-scroll data-options='{ "easing": "linear" }' href="#dr-bronner">Dr Bronner's</a></li>
					<?php
						$menuCount = 0;
					    while ( have_rows('partners_menu_items') ) : the_row();
						$menuCount = $menuCount + 1;
					?>
						<li><a
								data-scroll data-options='{ "easing": "linear" }'
								href="#partner-<?php echo $menuCount ?>">
								<?php the_sub_field('partner_menu_item'); ?>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php
						else :
						    echo "<p>Please add menu items corresponding to the partners listed on this page.</p>";
						endif;
						?>
				</nav>
			</section>
			<section id="dr-bronner" class="partner-outer-container row-tb-pad">
				<div class="partner-container full-content-area">
				<div class="bronner-title-group row-top-pad">
				<?php if( get_field('bronner_title_image') ): ?>
					<div class="partner-title-image">
						<img src="<?php the_field('bronner_title_image') ?>" alt="" />
					</div>
				<?php endif; ?>
					<div class="partner-description">
						<?php if( get_field('bronner_partner_name') ): ?>
							<h2 class="blue-heading"><?php the_field('bronner_partner_name') ?></h2>
						<?php endif; ?>
						<?php if( get_field('bronner_partner_description') ): ?>
							<p><?php the_field('bronner_partner_description') ?> </p>
						<?php endif; ?>
					</div>
				</div>
				<div class="partner-what-group row-tb-pad">
					<?php if( get_field('bronner_do_title') ): ?>
						<h5 class="partner-what-heading"><?php the_field('bronner_do_title') ?></h5>
					<?php endif; ?>
					<?php if( get_field('bronner_description_what') ): ?>
						<?php the_field('bronner_description_what') ?>
					<?php endif; ?>
				</div>
				<div class="partner-gallery">
					<?php $images = get_field('bronner_image_gallery');	?>
					<aside class="bronner-flex-container-upper">
				        <div class="bronner-flex-item-left">
				            <div class="bronner-inner-box-upper">
				                <img src="
									<?php echo $images['0']['url'] ?>" alt="<?php echo $images['0']['alt'];?>">
				            </div>
				        </div>
				        <div class="bronner-flex-item-right">
				            <div class="bronner-inner-box-upper">
				                <img src="<?php echo $images['1']['url'] ?>" alt="<?php echo $images['0']['alt'];?>">
				            </div>
				        </div>
				    </aside>
				    <aside class="bronner-flex-container-lower">
				        <div class="bronner-flex-item-left">
				        <div class="bronner-inner-box-lower">
				            <img src="<?php echo $images['2']['url'] ?>" alt="<?php echo $images['0']['alt'];?>">
				        </div>
				        </div>
				        <div class="bronner-flex-item-right">
				            <div class="bronner-inner-box-lower">
				                <img src="<?php echo $images['3']['url'] ?>" alt="<?php echo $images['0']['alt'];?>">
				            </div>
				        </div>
				    </aside>
				</div><!-- .partner-gallery -->
				<div class="partner-services-container row-tb-pad">
					<?php
					$title = 'Media Placements';
					$titleClass = 'media-placement-title';
					$icon = 'icon URL';
					$repeater = 'bronner_media_placements';
					$sub_field = 'bronner_media_placement';
					require(locate_template('template-parts/bronner-media-placement.php' ));
					?>

					<?php
					$title = "Services provided to Dr. Bronner's";
					$titleClass = 'service-provided-title';
					$icon = 'icon URL';
					$repeater = 'bronner_services_provided';
					$sub_field = 'bronner_service_provided';
					require(locate_template('template-parts/bronner-media-placement.php' ));
					?>

					<?php
					$title = "Support for Dr. Bronner's campaigns";
					$titleClass = 'campaign-supported-title';
					$icon = 'icon URL';
					$repeater = 'bronner_supported_campaigns';
					$sub_field = 'bronner_supported_campaign';
					require(locate_template('template-parts/bronner-media-placement.php' ));
					?>
				</div><!-- .partner-services-container -->

				<!-- Back to TOP - may or may not keep

				<p><a
						data-scroll
						data-options='{ "easing": "easeOutCubic" }'
						href="#">Back to the top
					</a>
				</p>
				</div>
			-->
			
			</section><!-- #dr bronner -->
			<?php
			    $count = 0;
			if( have_rows('other_partners') ):
			while ( have_rows ('other_partners') ): the_row();
			            $count = $count + 1;
			?>
			<section id="partner-<?php echo $count?>" class="partner-outer-container row-tb-pad">
				<div class="partner-container additional-partners full-content-area">

						<h2 class="blue-heading partner-heading text-content-area row-top-pad"><?php the_sub_field('partner_name');?></h2>
				<div class="partner-title-group row-top-pad">


				<?php
					if(get_row_layout() == 'partner_name_group'): ?>
					        <?php
					while(has_sub_field('partner_content_group_flex')):
					if(get_row_layout() == "partner_content_group"):
					        ?>
						        <div class="partner-title-image row-bottom-pad">
						            <img src="<?php the_sub_field('partner_image');?>" alt="" />
						        </div>
										<div class="partner-description row-bottom-pad">
									        <h6><?php the_sub_field('partner_heading');?></h6>
													<?php the_sub_field('partner_description');
													?>
										</div>

										<?php
												endif;//get_row_layout partner_content_group
												endwhile;//have_rows(partner_content_group_flex)
											?>
				</div>


				<div class="partner-what-group row-bottom-pad">
						<h5 class="partner-what-heading"><?php the_sub_field('do_partner')?></h5>
						<?php the_sub_field('description_what') ?>
				</div>

				<div class="partner-services-container ">
				    <?php
				        $title = 'Media Placements';
				        $titleClass = 'media-placement-title';
				        $repeater = 'partner_media_placements';
				        $sub_field = 'partner_media_placement';
				        require(locate_template('template-parts/partner-media-placement.php'));

				        $title = 'Services Provided to Partner';
				        $titleClass = 'media-placement-title';
				        $repeater = 'partner_services_provided';
				        $sub_field = 'partner_service_provided';
				        require(locate_template('template-parts/partner-media-placement.php'));

				        $title = "Support for Partner's campaigns";
				        $titleClass = 'media-placement-title';
				        $repeater = 'partner_supported_campaigns';
				        $sub_field = 'partner_campaign_supported';
				        require(locate_template('template-parts/partner-media-placement.php'));

				endif;//get_row_layout(partner_name_group)?>
				</div><!-- .partner-services-container -->

				<section class="partners-gallery gallery full-content-area">
					<?php
						$images = get_field('partners_image_gallery');
						if( $images ):
					?>
					<div class="partners-gallery-row gallery-row">
						<img src="<?php echo $images[0]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[1]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[2]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[3]['sizes']['thumbnail'];?>" alt="">
					</div>
					<div class="partners-gallery-row gallery-row">
						<img src="<?php echo $images[4]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[5]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[6]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[7]['sizes']['thumbnail'];?>" alt="">
					</div>
					<div class="partners-gallery-row gallery-row">
						<img src="<?php echo $images[8]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[9]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[10]['sizes']['thumbnail'];?>" alt="">
						<img src="<?php echo $images[11]['sizes']['thumbnail'];?>" alt="">
					</div>
				<?php endif;?>

				</section>
<!-- Back to TOP - may or may not keep
				<p><a
						data-scroll
						data-options='{ "easing": "easeOutCubic" }'
						href="#">Back to the top
					</a>
				</p>
			-->
			</div>

			</section><!-- #partner end -->
			    <?php
					endwhile;//have_rows('other_partners')
					endif;//have_rows('other_partners')
			    ?>

			</article><!-- .partners-outer-container -->
		</main><!-- #main -->
	<!-- </div>#primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
