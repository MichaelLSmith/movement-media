<div class="movement-highlight">
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
<!-- <article class="highlight-vid-container"> -->
    <div class="embed-container">
           <?php
            the_field('video_url'); ?>
    </div>
<!-- </article> -->
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
    <div id="thumbnail">
        <?php the_post_thumbnail('thumbnail');?>
    </div>
    <?php endif; ?>
	<article id="link">
	    <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
	</article>
</div>
     <?php $post_object = NULL;?>
     <!-- need to reset postobj to null or undefined -->
