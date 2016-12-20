<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area full-content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="entry-title">Movement Messenger</h3>
			</header><!-- .page-header -->
			<div class="stories-container boxlist-2col-flex">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<section id="post-<?php the_ID(); ?>" class="stories-list messenger-list">

					 <a href="http://<?php the_field('newsletter_url') ?>" target="_blank" rel="bookmark">
						<!--<div class="stories-image">
								 <?php
										 if ( has_post_thumbnail() ) :
												 the_post_thumbnail();
								 else :
									 $image = get_field('newsletter_stand-in_image', 1709);
						?>
									 <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
									<?php endif; //Thumbnail ?>
						 </div> -->
					 <h5 class="stories-title"><?php the_title(); ?> </h5>
					 <div class="messenger-text"><?php the_field('messenger_text') ?></div>
				 </a>

						 <div class="post_tags">
				 				<?php echo get_the_tag_list('<div class="post_tags">', '', '</div>'); ?>
				 		</div>
						
				 </section>


				 <?php
			endwhile;
					?>
			</>
		<?php
				the_posts_pagination( array( 'mid_size'  => 2 ) );
	else :
			get_template_part( 'template-parts/content', 'none' );
?>

<?php

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
