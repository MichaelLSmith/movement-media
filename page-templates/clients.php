<?php
/**
* Template Name: Clients
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			// while ( have_posts() ) : the_post();
			//
			// 	get_template_part( 'template-parts/content', 'page' );
			//
			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;
			//
			// endwhile; // End of the loop.
			?>

			<main id="top">

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

				<section>
					<p>
						<strong>Linear</strong><br>
						<a data-scroll data-options='{ "easing": "linear" }' href="#bazinga">Linear (no other options)</a><br>
					</p>

					<p>
						<strong>Ease-In</strong><br>
						<a data-scroll data-options='{ "easing": "easeInQuad" }' href="#bazinga">Quad</a><br>
						<a data-scroll data-options='{ "easing": "easeInCubic" }' href="#bazinga">Cubic</a><br>
						<a data-scroll data-options='{ "easing": "easeInQuart" }' href="#bazinga">Quart</a><br>
						<a data-scroll data-options='{ "easing": "easeInQuint" }' href="#bazinga">Quint</a>
					</p>

					<p>
						<strong>Ease-In-Out</strong><br>
						<a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bazinga">Quad</a><br>
						<a data-scroll data-options='{ "easing": "easeInOutCubic" }' href="#bazinga">Cubic</a><br>
						<a data-scroll data-options='{ "easing": "easeInOutQuart" }' href="#bazinga">Quart</a><br>
						<a data-scroll data-options='{ "easing": "easeInOutQuint" }' href="#bazinga">Quint</a>
					</p>

					<p>
						<strong>Ease-Out</strong><br>
						<a data-scroll data-options='{ "easing": "easeOutQuad" }' href="#bazinga">Quad</a><br>
						<a data-scroll data-options='{ "easing": "easeOutCubic" }' href="#bazinga">Cubic</a><br>
						<a data-scroll data-options='{ "easing": "easeOutQuart" }' href="#bazinga">Quart</a><br>
						<a data-scroll data-options='{ "easing": "easeOutQuint" }' href="#bazinga">Quint</a>
					</p>

					<p>
						.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
						.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
						.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.
					</p>

					<p id="bazinga"><a data-scroll href="#1@#%^-bottom">Bazinga!</a></p>

					<p>
						.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
						.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>
						.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.<br>.
					</p>

					<!-- <p id="1@#%^-bottom"><a data-scroll data-options='{ "easing": "easeOutCubic" }' href="#">Back to the top</a></p> -->
				</section>

				<section>
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
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_sidebar();
get_footer();
