<?php
/**
 * Template Name: About Page
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
				<div class="about-services-left">
					<?php
						$services = get_field( 'about_services_left' );
						if($services) {
							// echo "<div class='services-repeater-container'</div>";
							foreach ($services as $service) {
								echo "<span class='service'>" . $service['service'] . "</span>";
							}
						}

						?>
				</div>
				<div class="about-services-right">
					<?php
						$services = get_field( 'about_services_right' );
						if($services) {
							// echo "<div class='services-repeater-container'</div>";
							foreach ($services as $service) {
								echo "<span class='service'>" . $service['service'] . "</span>";
							}
						}

						?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
