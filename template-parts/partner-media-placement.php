<div class="partner-media-placement">
    <ul>
        <?php
            if ( have_rows('bronner_media_placements') ):
                while ( have_rows('bronner_media_placements') ): the_row();
                    $placement = get_sub_field('bronner_media_placement');
                    if ( $placement ):
                        echo "<li>" . $placement . "</li>";
                    endif;
                endwhile;
            endif;
        ?>
    </ul>
</div>
