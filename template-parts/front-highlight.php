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
    <p>print 2nd $post</p>
    <?php
    print_r($post);
// endif;
?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
