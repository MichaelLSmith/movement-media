<?php $post_object = NULL; ?>
<?php
$post = get_field($highlight);
setup_postdata($post);
?>
<div id="post-<?php the_ID(); ?>" class="highlight-item">
<div class="inner-box-<?php echo $y_axis ?>-<?php echo $x_axis ?>">

    <?php
        if( get_field('story_alt_image') ):
            $image = get_field('story_alt_image');?>
            <img src="<?php echo $image['url']?>" alt="<?php $image['alt']?>"/>

    <?php
    elseif (has_post_thumbnail() ) :
         the_post_thumbnail();?>
    <?php endif; ?>
    <div class="highlight-text">
        <h6 id="link">
            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </h6>
        <div class="action-btn">
             <a href="<?php the_permalink(); ?>">LEARN MORE</a>
        </div>
    </div>
    <?php
     wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
</div>
</div>
 <?php $post_object = NULL;?>
