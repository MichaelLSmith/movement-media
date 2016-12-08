<form class="footer-search-form" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <!-- change -->
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="footer-search-field"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="action-btn-large footer-search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
