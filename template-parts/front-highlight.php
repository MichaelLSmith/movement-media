<div>
    <p>start highlight</p>
    <?php echo $highlight ?>
    <p>print 1st $post</p>
    <?php
    print_r($post);
// endif;
?>
</div>
<?php
	$post = get_field($highlight);
	// if( $post ):
		setup_postdata($post);
?>
<?php
    $post_object = get_field('add_video_to_page');?>
    <div><p>Print $post obj for video</p></div>
    <div><?php print_r($post_object)?></div>
    <?php
        if( $post_object ):?>
        <p>in if for $postObj</p>
        <?php

            // override $post
            $post = $post_object;
            setup_postdata( $post );
        ?>
        <p>Print $post for video </p>
        <?php print_r($post);?>
        <?php
         wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif;?>
        <!-- <p>CHANGE</p> -->
        <p>$highlight after video</p>
        <?php echo($highlight); ?>
        <?php
            $post = get_field($highlight);
            setup_postdata($post);
        ?>

        <p>Reset $post after video to $highlight</p>
        <?php
            print_r($post);
        ?>
<?php
