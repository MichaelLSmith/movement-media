<div class="flex-item-<?php echo $y_axis ?>">
    <div class="inner-box-<?php echo $x_axis ?>">
        <?php $post_object = NULL; ?>
        <?php
            $post = get_field($highlight);
                setup_postdata($post);
        ?>
        <?php $post_object = get_field('add_video_to_page');?>
        <?php
            if( $post_object ):
                // override $post
                $post = $post_object;
                setup_postdata( $post );
            ?>
        <!-- <div class="thumb-container"> -->
            <!-- change -->
               <?php
                the_field('video_url'); ?>
        <!-- </div> -->
        <?php
         wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif;?>
        <?php
            $post = get_field($highlight);
            setup_postdata($post);
        ?>
        <?php
        if($post_object):
        elseif (has_post_thumbnail() ) : ?>
        <!-- <div class="thumb-container"> -->
            <?php the_post_thumbnail('thumbnail');?>
        <!-- </div> -->
        <?php endif; ?>
            <div id="link">
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </div>
    </div>
</div>
     <?php $post_object = NULL;?>
