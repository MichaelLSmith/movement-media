<?php
/**
 * Template Name: Menu Example
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

                <?php if ( have_rows('menu_sections') ):
                    while ( have_rows('menu_sections') ): the_row(); ?>
                        <h2><?php the_sub_field('section_title'); ?></h2>
                        <?php if ( have_rows('section_items') ): ?>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Description</td>
                                        <td>Price</td>
                                    </tr>
                                </thead>
                            <?php while ( have_rows('section_items') ): the_row(); ?>
                                <tr>
                                    <td><?php the_sub_field('dish_name'); ?></td>
                                    <td><?php the_sub_field('dish_description'); ?></td>
                                    <td>$<?php the_sub_field('dish_price'); ?></td>
                                </tr>
                            <?php endwhile; ?>
                            </table>
                        <?php endif; ?>
                    <?php endwhile;
                endif; ?>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
