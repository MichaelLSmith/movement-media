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


change
			<?php

			// check if the flexible content field has rows of data
			if( have_rows('flex_partners') ):
				echo "<p>in flex_partners</p>";
			 	// loop through the rows of data
			    while( have_rows('flex_partners') ) : the_row();
					echo "<p>in flex partners while</p>";

					if( get_row_layout() == 'partner_inner_flex'):
						echo "<p>in flex partners while</p>";

						if( have_rows('partner_content') ):
							echo "<p>partner content if</p>";

							while( have_rows('partner_content')):
								// echo "<p>partner content while</p>";
								if( get_row_layout() == 'partner_name_group'):

									echo "<p>in partner name group if. variables here</p>";
									// $partner_name = get_sub_field('partner_name');
									// $partner_image = get_sub_field('partner_image');
									// $partner_description = get_sub_field('partner_description');
									//
									// echo "<p>". $partner_name . "</p>";
									// echo "<img src=" . $partner_image . ">";
									// echo "<p>". $partner_description . "</p>";

								endif;//(get_row_layout() == 'partner_name_group'):
							endwhile;//have_rows('partner_content')
						endif;//have_rows('partner_content')
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
