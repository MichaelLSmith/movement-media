<div class="partner-media-placement">
    <ul>
        <?php
            if ( have_rows($repeater) ):
                while ( have_rows($repeater) ): the_row();
                    $placement = get_sub_field($sub_field);
                    if ( $placement ):
                        echo "<li>" . $placement . "</li>";
                    endif;
                endwhile;
            endif;
        ?>
    </ul>
</div>
