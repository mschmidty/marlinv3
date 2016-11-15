<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marlinv3.0
 */

?>

	</div><!-- #content -->
	<footer>
					<div class="footer-width">
            <div class="address-footer grid">
              <div class="col col-1-2">
                  <ul>
                      <li><h5>durangoshadecompany@gmail.com</h5></li>
                      <li><h5>3045 E 2nd Ave.<br> Durango, Colorado 81301</h5></li>

                  </ul>
              </div>
              <div class="col-1-2 social-media">
              	<ul>
                  <li><a href="https://www.facebook.com/pages/Durango-Shade-Company/220148161468362"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png"></a></li>
                  <li><a href="http://instagram.com/durangoshadecompany"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png"></a></li>
                  </ul>
                  <h4>970-497-9001</h4>
              </div>
            </div>
            <div class="nav-footer">
                <?php wp_nav_menu( array('menu' => 'Nav' )); ?>
            </div>
            <div class="footer-logo">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/dsclogo.png">
            </div>
					&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
					</div>
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'marlinv3-0' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'marlinv3-0' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'marlinv3-0' ), 'marlinv3-0', '<a href="http://schmidtyworks.com/" rel="designer">Schmidtyworks</a>' ); ?>
					</div><!-- .site-info -->
				</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
