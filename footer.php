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
        <div class="footer-inner full-content-area">
            <!-- change -->

            <!-- change -->

            <section class="footer-menu-container">
                <?php
                    wp_nav_menu( array( 'menu' => 'footer-menu-1', 'menu_class' => 'footer-menu' ) );
                ?>
            </section>
            <section class="footer-middle">
                <div class="footer-search-container">
                    <?php get_search_form() ?>
                  </div>
                    <div class ="social-share">
            							<a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>">
            									<div class="share-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/10/twitter-e1478996500727.png" height="36" width="36" alt="Movement Media logo">
            									</div>
            									<span class="share-icon-text footer-share-text">Share on Twitter</span>
            							</a>
            			  </div>
            				<div class ="social-share">
            							<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="">
            									<div class="share-icon"><img src="http://movementmedia.dev/wp-content/uploads/2016/10/facebook-e1478996492964.png" height="36" width="36" alt="Movement Media logo"></div>
            									<span class="share-icon-text footer-share-text">Share on Facebook</span>
            							</a>
            				</div>

            </section>
            <section class="footer-logo-section">
                <div class="footer-image-container">
                    <img src="http://movementmedia.dev/wp-content/uploads/2016/11/MM-home-logo.png" height="55" width="66" alt="Movement Media logo">
                </div>
                <div class="tag-line">
                    <p>Mission</p>
                    <p>Driven</p>
                    <p>Communications</p>
                </div>
            </section>


        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
