<?php
/**
 * Template Name: about-menu
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

            <?php

				if ( have_rows('about_services_left') ):
                    while ( have_rows('about_services_left') ): the_row();
						$service = get_sub_field('service');
						$description = get_sub_field('service_description');
				?>

				<dl class="services-list">
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
				</dl>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
