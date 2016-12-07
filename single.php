<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();


		if(in_category('Press Release')){
			get_template_part('template-parts/content','press_release');
		}
		elseif(in_category('Newsletter')){
			echo "in else if newsletter";
			get_template_part('template-parts/content','newsletter');
		}
		else{
			get_template_part('template-parts/content');
		}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
