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
	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-inner">
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
                <section class="footer-search-container">
                    <?php get_search_form() ?>
                </section>
        </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'movementmedia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'movementmedia' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'movementmedia' ), 'movementmedia', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
