<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area"> -->
		<main class="content-inner" role="main">
			<article class="about-outer-container outer-container">
				<section class="entry-title-container full-content-area">
					<!-- may want to add a div to help control width of title -->
					<?php the_title('<h1 class="entry-title">', '</h1>' ); ?>
				</section>
				<section class="about-mission bold-lead-paragraph full-content-area">
					<div class="about-mission-inner bold-lead-paragraph-inner">
						<?php the_field('about_mission'); ?>
					</div>
				</section>
				<?php if( get_field('about_main_image') ): ?>
					<section class="about-main-image main-image full-content-area">
							<img src="<?php the_field('about_main_image');?>" alt="" />
					</section>
				<?php endif;?>
				<section class="about_description description-area full-content-area">
					<?php if( get_field('about_description') ): ?>
					<div class="about-description text-content-area">
							<?php the_field('about_description'); ?>
						<?php endif; ?>
					</div>
				</section>
				<?php if( get_field('about_secondary_image') ): ?>
					<section class="about-secondary-image secondary-image full-content-area row-bottom-pad">
						<div class="image-content-area-small">
							<img src="<?php the_field('about_secondary_image');?>" alt="" />
						</div>
					</section>
				<?php endif;?>
				<section class="about-what full-content-area">
					<div class="about-what text-content-area row-bottom-pad">
						<h2 class="blue-heading">What We Do</h2>
						<?php if( get_field('about_what_we_do') ): ?>
							<?php the_field('about_what_we_do'); ?>
						<?php endif; ?>
					</div>
				</section>
				<section class="about-services boxlist-2col">
					<div class="full-content-area">
						<h2 class="boxlist-2col-title blue-heading text-content-area">Our Services Include:</h2>
					<div class="about-services-flex boxlist-2col-flex">
						<ul class="about-services-left ">
								            <?php
							if ( have_rows('about_services_left') ):
			                    while ( have_rows('about_services_left') ): the_row();
									$service = get_sub_field('service');
							?>
								<?php
									if ( $service ):
										echo "<li><span>" . $service . "</span></li>";
									endif;
								?>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
						<ul class="about-services-right">
						<?php
							if ( have_rows('about_services_right') ):
								while ( have_rows('about_services_right') ): the_row();
									$service = get_sub_field('service');
							?>
								<?php
									if ( $service ):
										echo "<li><span>" . $service . "</span></li>";
									endif;
								?>
					            <?php endwhile; ?>
				            <?php endif; ?>
						</dl>
					</div>
				</div>
	    		</section>
				<section class="bios full-content-area row-top-pad">
					<div class="about-bios-inner text-content-area">
						<h2 class="blue-heading">Who we are</h2>
						<?php
							if ( have_rows('bios') ):
								                    while ( have_rows('bios') ): the_row();
									$image = get_sub_field('bio_image');
									$name = get_sub_field('bio_name');
									$title = get_sub_field('bio_title');
									$text = get_sub_field('bio_text');
							?>
								<article class="bio">
									<aside class="bio-bi-line">
										<?php
											if ( $image ):
												echo "
													<div class='bio-image-container'>
														<img src='$image'>
													 </div>
													 ";
											endif;
										?>
										<?php
											if ( $name ):
												echo "<h3>" . $name . " " . "</h3>";
											endif;
										?>
									</aside>


								<?php
									if ( $text ):
										echo "<aside class='bio-text'>" . $text . "</aside>";
									endif;
								?>
							</article>
									            <?php endwhile; ?>
								            <?php endif; ?></div>
				</section><!-- .bios full-content-area -->
				<section class="about-action-btn full-content-area row-bottom-pad">
					<div class="action-btn action-btn-large text-content-area">
						<a href="<?php the_field('front_header_action_button'); ?>">Contact Movement Media</a>
					</div>
				</section>
			</article>
		</main><!-- #main -->
	<!-- </div><! #primary -->
</div><!-- #content -->
<?php
get_footer();
