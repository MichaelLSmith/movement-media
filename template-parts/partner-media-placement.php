<div class="partner-media-placement">
    <div class="partner-inner-flex">
        <div class="media-placement-icon">
            <?php echo $icon ?>
        </div>
        <h5 class="<?php echo $titleClass?>">
            <?php echo $title ?>
        </h5>
    </div>
    <ul>
        <?php
            while ( has_sub_field($repeater) ):
                $placement = get_sub_field($sub_field);
                if ( $placement ):
                    echo "<li>" . $placement . "</li>";
                endif;
            endwhile;
        ?>
    </ul>
</div>
