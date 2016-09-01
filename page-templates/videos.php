<?php
/**
 * Template Name: Videos
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MovementMedia
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main class="content-inner" role="main">


            <?php
                if ( have_rows('video_list') ):
                    while ( have_rows('video_list') ): $row = the_row();

                    echo json_encode($row);
                    endwhile;
                endif;
                ?>

            <script type="text/javascript">var row = "<?= $row ?>";</script>
<script type="text/javascript" src="file.js"></script>

            <iframe width="280" height="158" src="https://www.youtube.com/embed/o6pcJxFen8Y" frameborder="0" allowfullscreen></iframe>








		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
