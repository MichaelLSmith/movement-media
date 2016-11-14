<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MovementMedia
 */

 ?>
	<footer id="colophon" class="site-footer row-tb-pa" role="contentinfo">
        <div class="footer-inner full-content-area">
            <!-- change -->
            <section class="footer-logo-section">
                <div class="footer-image-container">
                    <img src="<?php the_field('footer_image', 'option'); ?>" class="footer-company-img" alt="">
                </div>
                <div class="tag-line">
                    <p>MISSION</p>
                    <p>DRIVEN</p>
                    <p>COMMUNICATIONS</p>
                </div>
            </section>
            <!-- change -->
            <section class="footer-menu-container">
                <?php
                    wp_nav_menu( array( 'menu' => 'footer-menu-1', 'menu_class' => 'footer-menu' ) );
                    wp_nav_menu( array( 'menu' => 'footer-menu-2', 'menu_class' => 'footer-menu' ) );
                    wp_nav_menu( array( 'menu' => 'footer-menu-3', 'menu_class' => 'footer-menu' ) );
                ?>
                </section>
                <section class="footer-search-container row-top-pad">
                    <?php get_search_form() ?>
                </section>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
