<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main class="content-inner" role="main">

			<div class="entry-title-container">
				<?php the_title('<h1 class="entry-title">', '</h1>' ); ?>
			</div>
			<section class="about-mission">
				<?php the_field('about_mission'); ?>
			</section>
			<section class="about-gallery">
				<?php
					$images = get_field('about_image_gallery');
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
			</section>
			<section>
				<?php if( get_field('about_mission_second') ): ?>
					<?php the_field('about_mission_second'); ?>
				<?php endif; ?>
			</section>
			<section>
				<h4>What We Do</h4>
				<?php if( get_field('about_what_we_do') ): ?>
					<?php the_field('about_what_we_do'); ?>
				<?php endif; ?>
			</section>
			<?php if( get_field('about_main_image') ): ?>
				<section>
					<img src="<?php the_field('about_main_image');?>" alt="" />
				</section>
			<?php endif;?>
			<h1>Services</h1>
			<section class="about-services">
				<dl>
	            <?php
					if ( have_rows('about_services_left') ):
	                    while ( have_rows('about_services_left') ): the_row();
							$service = get_sub_field('service');
							$description = get_sub_field('service_description');
					?>
						<?php
							if ( $service ):
								echo "<dt>" . $service . "</dt>";
							endif;
						?>
						<?php
							if ( $description ):
								echo "<dd>" . $description . "</dd>";
							endif;
						?>
		            <?php endwhile; ?>
	            <?php endif; ?>
				</dl>
				<dl>
	            <?php
					if ( have_rows('about_services_right') ):
	                    while ( have_rows('about_services_right') ): the_row();
							$service = get_sub_field('service');
							$description = get_sub_field('service_description');
					?>
						<?php
							if ( $service ):
								echo "<dt>" . $service . "</dt>";
							endif;
						?>
						<?php
							if ( $description ):
								echo "<dd>" . $description . "</dd>";
							endif;
						?>
		            <?php endwhile; ?>
	            <?php endif; ?>
				</dl>
    		</section>
			<section class="bios">
				<h1>Who we are</h1>
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
	            <?php endif; ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
