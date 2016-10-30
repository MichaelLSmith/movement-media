<div class="partner-media-placement">
    <span class="media-placement-icon">
        <?php echo $icon ?>
    </span>
    <h4><?php echo $title ?></h4>
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
