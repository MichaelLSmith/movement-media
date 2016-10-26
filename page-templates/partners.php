<?php
/**
* Template Name: Partners
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- Content Starts -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<article id="top">
			<nav class="clients-nav">
				<h1>Clients Menu</h1>
				<ul>
					<li><a data-scroll data-options='{ "easing": "linear" }' href="#dr-bronner">Dr Bronner's</a></li>
					<li><a data-scroll data-options='{ "easing": "linear" }' href="#vote-hemp">Vote Hemp</a></li>
					<li><a data-scroll data-options='{ "easing": "linear" }' href="#fair-world">Fairworld Project</a></li>
				</ul>
<!-- href="https://github.com/cferdinandi/smooth-scroll">GitHub</a></p> -->
				<hr>
			</nav>
			<!-- <section>
				<div id="dr-bronner">Dr. Bronner's
					<p><a data-scroll data-options=
						'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
				</div>
				<div id="vote-hemp">Vote Hemp
					<p><a data-scroll data-options=
						'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
				</div>
				<div id="fair-world">Fairworld Project
					<p><a data-scroll data-options=
						'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
					</div>
				<p id="bottom"><a data-scroll data-options=
					'{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p>
			</section> -->
			<!-- change -->
			<?php
			// $favcolor = "red";
			//
			// switch ($favcolor) {
			//     case "red":
			//         echo "Your favorite color is red!";
			//         break;
			//     case "blue":
			//         echo "Your favorite color is blue!";
			//         break;
			//     case "green":
			//         echo "Your favorite color is green!";
			//         break;
			//     default:
			//         echo "Your favorite color is neither red, blue, nor green!";
			// }
			?>



			<?php

			// check if the flexible content field has rows of data
			if( have_rows('flex_partners') ):
				echo "<p>in flex_partners</p>";
			 	// loop through the rows of data
			    while ( have_rows('flex_partners') ) : the_row();
					echo "<p>in flex partners while</p>";
					if( get_row_layout() == 'partner_inner_flex'):
						echo "<p>in flex partners while</p>";

						if ( get_row_layout() == 'partner_content'):





							if( have_rows('partner_content') ):
								// loop through the rows of data
								echo "<p>in partner_content if</p>";
							    while ( have_rows('partner_content') ) : the_row();
									echo "<p>in partners content while</p>";//this repeats 4 times
									// check if the flexible content field has rows of data
									if( have_rows('partner_name_group') ):
										echo "<p>in partner group if</p>";
										while ( have_rows('partner_name_group') ):
											echo "<p>in partner group while. variables here</p>";
											$partner_name = get_sub_field('partner_name');
											$partner_image = get_sub_field('partner_image');
											$partner_description = get_sub_field('partner_description');

											echo "<p>". $partner_name . "</p>";
											echo "<img src=" . $partner_image . ">";
											echo "<p>". $partner_description . "</p>";

										endwhile;//have_rows('partner_name_group')
									endif;//have_rows('partner_name_group')

									if( have_rows('what_partner_do') ):
										while ( have_rows('what_partner_do') ):
											$partner_what_title = get_sub_field('partner_what_title');
											$partner_what_text = get_sub_field('partner_what_text');

											echo "<p>". $partner_what_text . "</p>";
											echo "<p>". $partner_what_text . "</p>";

										endwhile;//have_rows('what_partner_do')
									endif;//have_rows('what_partner_do')

									if( have_rows('partner_picture_gallery') ):
										while ( have_rows('partner_picture_gallery') ):
											$partner_gallery_images = get_sub_field('partner_gallery_images');
										endwhile;//have_rows('partner_picture_gallery')
									endif;//have_rows('partner_picture_gallery')

									if( have_rows('partner_general_section') ):
										while ( have_rows('partner_general_section') ):
											$partner_general_image = get_sub_field('partner_general_image');
											$partner_general_heading = get_sub_field('partner_general_heading');
											$partner_general_text = get_sub_field('partner_general_text');

											echo "<p>". $partner_general_heading . "</p>";
											echo "<img src=" . $partner_general_image . ">";
											echo "<p>". $partner_general_text . "</p>";

										endwhile;//have_rows('partner_general_section')
									endif;//have_rows('partner_general_section')

									if( have_rows('work_for_partner') ):
										while ( have_rows('work_for_partner') ):
											if ( have_rows('partner_media_placements') ):
												while ( have_rows('partner_media_placements') ):
													$partner_media_placement = get_sub_field('partner_media_placement');
												endwhile;//have_rows('partner_media_placements')
											endif;//have_rows('partner_media_placements')

											if ( have_rows('partner_services_provided') ):
												while ( have_rows('partner_services_provided') ):
													$partner_service = get_sub_field('partner_general_heading');
												endwhile;//have_rows('partner_services_provided')
											endif;//have_rows('partner_services_provided')

											if ( have_rows('partner_campaigns') ):
												while ( have_rows('partner_campaigns') ):
													$partner_campaign = get_sub_field('partner_campaign');
												endwhile;//have_rows('partner_campaign')
											endif;//have_rows('partner_campaign')
										endwhile;//have_rows('work_for_partner')
									endif;//have_rows('work_for_partner')
								endwhile;//have_rows('partner content')
							endif;//have_rows('partner content')
						endif;//get_row_layout() == 'partner_inner_flex'):
				endwhile;//have_rows('flex_partners')
			endif;//have_rows('flex_partners')
?>

		</article>
	</main><!-- #main -->
</div><!-- #primary -->

</div><!-- #content -->
<?php
get_sidebar();
get_footer();
