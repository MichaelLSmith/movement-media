<div class="partner-media-placement">
    <div class="partner-inner-flex">
        <div class="media-placement-icon">
            <?php echo $icon ?>
        </div>
        <h6 class="<?php echo $titleClass?>">
            <?php echo $title ?>
        </h6>
    </div>
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
