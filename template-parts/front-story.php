<?php
    $post_object = get_field($story_location);
    if( $post_object ):
        // override $post
        $post = $post_object;
        setup_postdata( $post );
?>
<article class="featured-story">
    <div class="story-inner-container story-grey">
    <?php
        if (has_post_thumbnail() ) :
            ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
         <!-- What if it's post with a video or without an image? Probably always going to have an image -->
        <h3>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <?php the_field('excerpt_front_page') ?>
        <div class="action-btn">
             <a href="<?php the_permalink(); ?>">READ MORE</a>
        </div>
     </div>
</article>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
