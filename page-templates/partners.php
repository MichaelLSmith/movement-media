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
		</article>
	</main><!-- #main -->
</div><!-- #primary -->

</div><!-- #content -->
<?php
get_sidebar();
get_footer();
