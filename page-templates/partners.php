<?php
/**
* Template Name: Flex Partners
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- Content Starts -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<article id="top">

			<div class="partners-image">
				<img src="<?php the_field('full_sized_image'); ?>" />
			</div>
			<section class="partners-mission">
				<?php the_field('partners_mission') ?>
			</section>
			<nav class="clients-nav">
				<h1>Clients Menu</h1>
				<ul>
					<li><a data-scroll data-options='{ "easing": "linear" }' href="#dr-bronner">Dr Bronner's</a></li>
					<li><a data-scroll data-options='{ "easing": "linear" }' href="#vote-hemp">Hemp Industry</a></li>
					<li><a data-scroll data-options='{ "easing": "linear" }' href="#fair-world">Fairworld Project</a></li>
				</ul>
<!-- href="https://github.com/cferdinandi/smooth-scroll">GitHub</a></p> -->
				<hr>
			</nav>

		 <section>
			<div id="dr-bronner">
				<div class="partner-title-group">
					<div class="partner-title-image">
						<img src="<?php the_field('title_image') ?>" alt="" />
					</div>
				<h3><?php the_field('bronner_partner_name') ?></h3>
				<p> <?php the_field('bronner_partner_description') ?> </p>
				</div>
				<div class="partner-content-group">
					<h3><?php the_field('bronner_do_title') ?></h3>
					<p> <?php the_field('bronner_description_what') ?> </p>
				</div>
				<div class="partner-gallery">
					<?php
						$images = get_field('bronner_images_gallery');
						if( $images ): ?>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li>
						                <a href="<?php echo $image['url']; ?>">
						                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
						                </a>
						                <p><?php echo $image['caption']; ?></p>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>
				</div>
				<div class="partner-media-placement">
					<ul>
						<?php
							if ( have_rows('bronner_media_placements') ):
								while ( have_rows('bronner_media_placements') ): the_row();
									$placement = get_sub_field('bronner_media_placement');

									if ( $placement ):
										echo "<li>" . $placement . "</li>";
									endif;
								endwhile;
							endif;
						?>
					</ul>
				</div>
				<div class="partner-media-placement">
					<ul>
						<?php
							if ( have_rows('bronner_services_provided') ):
								while ( have_rows('bronner_services_provided') ): the_row();
									$service = get_sub_field('bronner_service_provided');

									if ( $service ):
										echo "<li>" . $service . "</li>";
									endif;
								endwhile;
							endif;
						?>
					</ul>
				</div>
				<div class="partner-media-placement">
					<ul>
						<?php
							if ( have_rows('bronner_supported_campaigns') ):
								while ( have_rows('bronner_supported_campaigns') ): the_row();
									$camapaign = get_sub_field('bronner_supported_campaign');

									if ( $camapaign ):
										echo "<li>" . $camapaign . "</li>";
									endif;
								endwhile;
							endif;
						?>
					</ul>
				</div>
				<p><a data-scroll data-options=
					'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
			</div>
			<!-- <div id="vote-hemp">Vote Hemp
				<p><a data-scroll data-options=
					'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
			</div>
			<div id="fair-world">Fairworld Project
				<p><a data-scroll data-options=
					'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
				</div>
			<p id="bottom"><a data-scroll data-options=
				'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p> -->
		</section>
			<!-- change -->


		</article>
	</main><!-- #main -->
</div><!-- #primary -->

</div><!-- #content -->
<?php
get_sidebar();
get_footer();
