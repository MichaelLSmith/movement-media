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

			<div class="about-services">
				<?php
					// check if the repeater field has rows of data
					if( have_rows('about_services') ):
					 	// loop through the rows of data
					    while ( have_rows('about_services') ) : the_row();
					        // display a sub field value
					        the_sub_field('service');
					    endwhile;
					else :
					    // no rows found
					endif;
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
