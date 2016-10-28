<div class="partner-media-placement">
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
