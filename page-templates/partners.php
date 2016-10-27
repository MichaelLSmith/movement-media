<?php
/**
* Template Name: Flex Partners
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<p style="color:red;">start of div primary</p>
		<main id="top">
		<!-- Content Starts -->
			<?php
				the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="partners-image">
					<p style="color:yellow;"> large image here </p>
					<img src="<?php
					//  the_field('full_sized_image'); ?>" />
				</div>
				<section class="partners-mission">
					<?php the_field('partners_mission') ?>
				</section>
				<nav class="clients-nav">
					<h1>Clients Menu</h1>
					<ul>
						<li><a data-scroll data-options='{ "easing": "linear" }' href="#dr-bronner">Dr Bronner's</a></li>
						<li><a data-scroll data-options='{ "easing": "linear" }' href="#vote-hemp">Hemp Industry</a></li>
						<li><a data-scroll data-options='{ "easing": "linear" }' href="#fair-world">Fairworld Project</a></li>
					</ul>
		<!-- href="https://github.com/cferdinandi/smooth-scroll">GitHub</a></p> -->
					<hr>
				</nav>
				end of main
		</main>
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
