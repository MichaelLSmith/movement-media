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
			<article class="about-outer-container">
				<section class="entry-title-container full-content-area">
					<!-- may want to add a div to help control width of title -->
					<?php the_title('<h1 class="entry-title">', '</h1>' ); ?>
				</section>
				<section class="mission full-content-area">
					<div class="mission-inner col8">
						<?php the_field('about_mission'); ?>
					</div>
				</section>
				
				<section class="about_description full-content-area">
					<?php if( get_field('about_description') ): ?>
					<div class="about-description text-content-area">
							<?php the_field('about_description'); ?>
						<?php endif; ?>
					</div>
				</section>
				<section class="about-what full-content-area">
					<div class="about-what text-content-area">
						<h4>What We Do</h4>
						<?php if( get_field('about_what_we_do') ): ?>
							<?php the_field('about_what_we_do'); ?>
						<?php endif; ?>
					</div>
				</section>
				<?php if( get_field('about_main_image') ): ?>
					<section class="about-main-image full-content-area">
						<div class="image-content-area">
							<img src="<?php the_field('about_main_image');?>" alt="" />
						</div>
					</section>
				<?php endif;?>
				<section class="about-services full-content-area">
					<div class="about-services-flex text-content-area">
						<h4>Services</h4>
						<ul class="about-services-left">
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
	    		</section>
				<section class="bios full-content-area">
					<div class="about-bios-inner text-content-area">
						<h4>Who we are</h4>
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
												echo "<h3>" . $name . " " . "<span class=title>" . $title . "</span></h3>";
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
				<section class="about-action-btn full-width-area">
					<div class="action-btn action-btn-large quote-content-area">
						<a href="<?php the_field('front_header_action_button'); ?>">contact movement media</a>
					</div>
				</section>
			</article>
		</main><!-- #main -->
	<!-- </div><! #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
