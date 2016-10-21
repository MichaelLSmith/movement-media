<div>start highlight</div>
<div><?php print_r($post) ?></div>
<?php
	$post = get_field($highlight);
	if( $post ):
		setup_postdata($post);
?>
	<!--video from highlight page -->
    <?php
        $post_object = get_field('add_video_to_page');
    	if( $post_object ):
            // override $post
            $post = $post_object;
            setup_postdata( $post );
    ?>
        <!-- <div class="embed-container"> -->
    	   <?php
            // the_field('video_url'); ?>
        <!-- </div> -->
        <?php
        //  wp_reset_postdata();
        endif;
endif;
?>
<!-- Thumbnail Image from hightlight_page -->
<div>
    Second Section thumbnail load?
    <?php echo $highlight;?></div>
<?php
	$post = get_field($highlight);
    if( $post ):
		setup_postdata($post);
?>
    <div>
    <?php print_r($post);?>
    </div>
    <div>
    	<?php
        if (has_post_thumbnail() ) : ?>
    	<?php
         echo 'in if thumbnail' ?>
    	<?php
        //  the_post_thumbnail();
         ?>
    </div>
    <!-- before post data reset2 -->
	<a href="<?php
    //  echo get_permalink(); ?>"><?php
    //  echo get_the_title(); ?></a>
<?php
wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    <?php endif; ?>
