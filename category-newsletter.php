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
						 <div class ="social-share story-share">
									 <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>">
											 <div class="share-icon"><img src="<?php echo content_url() . '/uploads/2016/10/twitter-e1478996500727.png'?>" height="36" width="36" alt="Movement Media logo">
											 </div>
									 </a>


									 <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="">
											 <div class="share-icon"><img src="<?php echo content_url() . '/uploads/2016/10/facebook-e1478996492964.png'?>" height="36" width="36" alt="Movement Media logo"></div>
									 </a>
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
