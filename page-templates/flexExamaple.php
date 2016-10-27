<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content_field_name') ):

 	// loop through the rows of data
    while ( have_rows('flexible_content_field_name') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'gallery' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('images') ):

			 	echo '<ul>';

			 	// loop through the rows of data
			    while ( have_rows('images') ) : the_row();

					$image = get_sub_field('image');

					echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

				endwhile;

				echo '</ul>';

			endif;

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
