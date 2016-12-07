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
			<section class="partners-image main-image full-content-area">
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
					<ul class="partners-nav-list image-content-area">
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
						<li>
              <a data-scroll data-options='{ "easing": "linear" }' href="#additional-partners">Additional Partners
            	</a>
            </li>
					</ul>
					<?php
						else :
						    echo "<p>Please add menu items corresponding to the partners listed on this page.</p>";
						endif;
						?>
				</nav>
			</section>
			<section id="dr-bronner" class="partner-outer-container row-top-pad">
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
				<div class="partner-what-group">
					<?php if( get_field('bronner_do_title') ): ?>
						<h5 class="partnesr-what-heading"><?php the_field('bronner_do_title') ?></h5>
					<?php endif; ?>
					<?php if( get_field('bronner_description_what') ): ?>
						<?php the_field('bronner_description_what') ?>
					<?php endif; ?>
				</div>
				<div class="bronner-image image-content-area row-bottom-pad">
					<?php $image = get_field('bronner_image');	?>
	                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'];?>">
				</div><!-- .bronner-image -->


				<!-- <div class="partner-bluebox-linkarea">
							<div class="bluebox-2col-flex">
					<div class="highlights-bluebox bluebox1 bluebox">
							<div class="bluebox-heading bluebox-innerflex">
									<span class="bluebox1-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/11/highlights-star.png" alt="Highlights Star" height="42" width="38"></span>
									<h2 class="bluebox-2col-title">Stories</h2>
							</div>
							<ul class="bluebox-indiv bluebox-indiv-left">
								<div class="bluebox-subarea">
										<h3 class="bluebox-2col-subtitle">Recent</h3>
										<li>Dr. Bronner's All-One Report</li>
										<li>Dr. Bronner’s & Animal Advocacy </li>
										<li>Dr. Bronner's All-One Report</li>
								</div>
								<div class="bluebox-subarea">
									<h3 class="bluebox-2col-subtitle">Highlights</h3>
										<li>Dr. Bronner's All-One Report Dr. B's All-One Report</li>
										<li>Dr. Bronner’s & Animal Advocacy </li>
										<li>Dr. Bronner's All-One Report — One Report</li>

								</div>
							</ul>
					</div>
					<div class="videos-bluebox bluebox2 bluebox">
							<div class="bluebox-heading bluebox-innerflex">
								<span class="bluebox2-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/11/videos-camera.png" alt="Videos-Camera" height="92" width="50"></span>
								<h2 class="bluebox-2col-title">Videos</h2>
							</div>
							<ul class="bluebox-indiv bluebox-indiv-right">
									<li>Journey to Serendipol</li>
									<li>Dr. Bronner’s: A Tribute to Ralph Bronner</li>
									<li>Sustainable Palm Oil: The Difference Fair Trade Makes</li>
									<li>Journey to Serendipol</li>
									<li>Dr. Bronner’s: A Tribute to Ralph Bronner</li>
									<li>Sustainable Palm Oil: The Difference Fair Trade Makes</li>
							</ul>
					</div>
				</div> .two Col flex
			</div><section.partner-bluebox-linkarea -->


					<?php
            $partnerName = get_field('bronner_client_tax');
						require(locate_template('template-parts/bluebox.php' ));
					?>

			</section><!-- #dr bronner -->
			<?php
			    $count = 0;
			if( have_rows('other_partners') ):
			while ( have_rows ('other_partners') ): the_row();
			            $count = $count + 1;
			?>
			<section id="partner-<?php echo $count?>" class="partner-outer-container row-tb-pad">
				<div class="partner-container additional-partners full-content-area">

						<h2 class="blue-heading partner-heading text-content-area"><?php the_sub_field('partner_name');?></h2>
				<div class="partner-title-group">


				<?php
					if(get_row_layout() == 'partner_name_group'): ?>
					        <?php
					while(has_sub_field('partner_content_group_flex')):
					if(get_row_layout() == "partner_content_group"):
					        ?>
						        <div class="partner-title-image">
						            <img src="<?php the_sub_field('partner_image');?>" alt="" />
						        </div>
										<div class="partner-description">
									        <h6><?php the_sub_field('partner_heading');?></h6>
													<?php the_sub_field('partner_description');
													?>
										</div>

										<?php
												endif;//get_row_layout partner_content_group
												endwhile;//have_rows(partner_content_group_flex)
											?>
				</div>


				<div class="partner-what-group">
						<h5 class="partner-what-heading"><?php the_sub_field('do_partner')?></h5>
						<?php the_sub_field('description_what') ?>
				</div>

				<?php
					$partnerName = get_sub_field('partner_name_tax');
					require(locate_template('template-parts/bluebox.php' ));
				endif;//get_row_layout(partner_name_group)?>

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

				<section id="additional-partners" class="partners-gallery full-content-area row-bottom-pad">
					<h2 class="blue-heading additional-partner-heading">Additional Partners</h2>
					<div class="partners-gallery-flex">
						<?php
						if( have_rows('partners_image_gallery') ):
							while ( have_rows('partners_image_gallery') ) : the_row();
								$image = get_sub_field('partner_gallery_image');
								// echo '<pre>';
								// 	var_dump( $image );
								// echo '</pre>';
								?>
								<div class="gallery-image">
									<a href="http://<?php the_sub_field('partner_gallery_url')?>">
										<img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="" />
									</a>
								</div>
						<?php endwhile;
						endif; ?>
					</div>
				</section>
			</article><!-- .partners-outer-container -->
		</main><!-- #main -->
	<!-- </div>#primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
