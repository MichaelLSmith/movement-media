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
			<?php the_field('about_introduction', '13'); ?>
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
						<?php
							if ( $image ):
								echo "<img src='$image'>";
							endif;
						?>
						<?php
							if ( $name ):
								echo "<h3>" . $name . " " . "<span class=title>" . $title . "</span></h3>";
							endif;
						?>
						<?php
							if ( $text ):
								echo $text;
							endif;
						?>
					</article>
		            <?php endwhile; ?>
	            <?php endif; ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
