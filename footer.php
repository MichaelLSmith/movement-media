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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-sidebar" class="secondary">
		<!-- contains: search, footer menu -->
			<div id="footer-sidebar1">
				<?php
				if(is_active_sidebar('footer-sidebar-1')){
				dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
			<!-- need three column footer by adding the other two sidebar/widgets. Or flex box?? -->
		</div>
		<div class="social-media-imgs">
			<!-- want to swap these in and out. Need to use ACF to set up section to enter.
		 	Also want to be able to enter address.-->
		</div>
		<div class="footer-address-container">
			<p><?php the_field('street_address', 'option'); ?></p>
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
