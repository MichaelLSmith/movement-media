<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <section class="stories-list row-bottom-pad">
        <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
    <div class="stories-image">
        <?php
        if ( has_post_thumbnail() ) :
            the_post_thumbnail();
        endif;
        ?>
    </div>
        <h5 class="stories-title"><?php the_title(); ?> </h5>
        </a>
        <div class="stories-date">
        <?php echo get_the_date(); ?>
        </div>
        <div class="stories-category">
        <?php
        the_category(' ');
        ?>
        </div>
        <?php echo get_the_tag_list('<div class="post_tags">', '', '</div>'); ?>
    </section>
</article>
