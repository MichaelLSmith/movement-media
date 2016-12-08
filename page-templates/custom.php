<?php
/**
 * Template Name: Custom Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>


<main class="content-inner" role="main">
	<article id="post-<?php the_ID(); ?>" class="about-outer-container row-bottom-pad">
		<section class="entry-title-container full-content-area">
			<?php the_title('<h1 class="entry-title">', '</h1>' ); ?>
		</section>
		<section class="bold-lead-paragraph full-content-area">
			<div class="bold-lead-paragraph-inner">
				<?php the_field('page_introduction');?>
			</div>
		</section>
		<?php if( get_field('custom_main_image') ): ?>
			<section class="custom-main-image main-image full-content-area">
					<img src="<?php the_field('custom_main_image');?>" alt="" />
			</section>
		<?php endif;?>
        <section class="flex-page-content full-content-area">
            <?php

            // check if the flexible content field has rows of data
            if( have_rows('page_content') ):
                 // loop through the rows of data
                while ( have_rows('page_content') ) : the_row();
					//check
                    if( get_row_layout() == 'text_content' ):

			?>
        <div class="text-content-area">
						<h4 class="">
							<?php the_sub_field('section_heading');?>
						</h4>
						<div class="flex-page-section-paragraph">
							<?php the_sub_field('section_paragraph'); ?>
						</div>
        </div>

						<?php elseif( get_row_layout() == 'image' ):?>
						<div class="flex-page-image row-bottom-pad">
                        	<?php $image = get_sub_field('section_image'); ?>
                        	<img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
						</div>
            <?php
                    endif;
                endwhile;
            endif; ?>

            </section>

        </article>
	</main><!-- #main -->
	<!-- </div><! #primary -->
</div><!-- #content -->
<?php
get_footer();
