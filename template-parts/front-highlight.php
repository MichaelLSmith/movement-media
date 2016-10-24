<div class="front-item-<?php echo $x_axis ?>">
    <div class="inner-box-<?php echo $y_axis ?>">
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
               <?php
                the_field('video_url'); ?>
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
            <?php the_post_thumbnail();?>
        <?php endif; ?>
            <div id="link">
                <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </div>
    </div>
</div>
     <?php $post_object = NULL;?>
