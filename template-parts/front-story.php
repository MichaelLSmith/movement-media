<?php
    $post_object = get_field($story_location);
    if( $post_object ):
        // override $post
        $post = $post_object;
        setup_postdata( $post );
?>
<article class="featured-story story-grey">
    <!-- <div class="story-inner-container "> -->
        <?php if (has_post_thumbnail() ) : ?>
        <div class="thumb-container">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
        <section class="story-text">
            <span>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </span>
                <?php the_field('excerpt_front_page') ?>
            <div class="action-btn">
                 <a href="<?php the_permalink(); ?>">READ MORE</a>
            </div>
        </section>
    <!-- </div> -->
</article>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
