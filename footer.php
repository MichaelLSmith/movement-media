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
		<section class="site-footer-inside">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu-container' ) ); ?>

			<section class="footer-middle-container">
				<div class="footer-search-container">
					<?php get_search_form( ) ?>
				</div>
				<div class="footer-social-media-container">
					<!-- want to swap these in and out. Need to use ACF to set up section to enter.-->
					<div class="footer-image-container">
						<img src="<?php the_field('social_media_image_1', 'option'); ?>" alt="">
					</div>
					<div class="footer-image-container">
						<img src="<?php the_field('social_media_image_2', 'option'); ?>" alt="">
					</div>
					<div class="footer-image-container">
						<img src="<?php the_field('social_media_image_3', 'option'); ?>" alt="">
					</div>
				</div>
			</section>
			<div class="footer-address-container">
				<ul>
					<li><?php the_field('street_address', 'option'); ?></li>
					<li><?php the_field('city', 'option'); ?></li>
					<li><?php the_field('state', 'option'); ?></li>
					<li><?php the_field('zip_code', 'option'); ?></li>
					<li><?php the_field('phone_number', 'option'); ?></li>
				</ul>
			</div>
			<div class="footer-image-container">
				<img src="<?php the_field('footer_image', 'option'); ?>" class="footer-company-img" alt="">
			</div>
		</section>
	<!-- .site-footer-inside -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'movementmedia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'movementmedia' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'movementmedia' ), 'movementmedia', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- </div> #outer-container -->

<?php wp_footer(); ?>

</body>
</html>
