<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area full-content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h6 class="page-title screen-reader-text"><?php single_post_title(); ?></h6>
				</header>

			<?php endif; ?>
			<h3 class="entry-title">Movement Stories</h3>

			<div class="stories-container boxlist-2col-flex">
				<?php

				/* Start the Loop */
				while ( have_posts() ) : the_post();
				?>



					<section class="stories-list row-bottom-pad">
						<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
					<div class="stories-image">
						<?php
						if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif;
						?>
					</div>
						<h5 class="stories-title">
							<?php the_title();
							?>
						</h5>
						</a>
						<div class="stories-date">
						<?php
							echo get_the_date();
							?>
						</div>
							<div class="stories-category">
							<?php
							the_category(' ');
							?>
						</div>

						<div class="stories-social-media social-share">
							<?php if( have_rows('stories_social_media') ): ?>
								<?php while( have_rows('stories_social_media') ): the_row();

								// vars
								$image = get_sub_field('stories_social_image');
								$link = get_sub_field('stories_social_media_share');

								?>
								<div class="stories-social-group social-share-group">
									<?php if( $link ): ?>
										<a href="<?php echo $link; ?>">
									<?php endif; ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
									<?php if( $link ): ?>
										</a>
									<?php endif; ?>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						</section>
				<?php
				endwhile;
				?>
			</div>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
