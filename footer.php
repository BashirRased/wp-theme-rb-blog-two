<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

?>
			</main>
			<!-- Page Blog List Area End Here -->

		</div>
		<!--===== Page Content Area End Here =====-->

	</div>
	<!--===============================================
    ===== Page Content with Sidebar Area End Here =====
    ================================================-->

	<!--==============================
    ===== Footer Area Start Here =====
    ===============================-->
	<footer class="site-footer">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<?php
						$fromYear = (int)esc_html('2022','rb-blog-two');
						$thisYear = esc_html( date_i18n( __( ' Y', 'rb-blog-two' )));;
						$copyrightYear = $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');

						printf(
							'<p class="copyright-text">%1$s %2$s %3$s <a href="%4$s" target="_blank">%5$s</a> %6$s</p>',
							
                            /* translators: %1$s: Copyright Text-1. */
							esc_html('&copy; Copyright','rb-blog-two'),

							/* translators: %2$s: Copyright Year. */
							$copyrightYear,

							/* translators: %3$s: Copyright Text-2. */
							esc_html('by','rb-blog-two'),

                            /* translators: %4$s: Home URL. */
							esc_url( home_url( '/' ) ),

                            /* translators: %5$s: Site Name. */
							esc_html( get_bloginfo( 'name' ),'rb-blog-two' ),

							/* translators: %6$s: Copyright Text-3. */
							esc_html('| All rights reserved.','rb-blog-two')
						);
					?>					
				</div>

				<div class="col-md-6">
					<?php
						printf(
							'<p class="powered-by-text">%1$s <a href="%2$s" target="_blank">%3$s</a>%4$s</p>',
							
                            /* translators: %1$s: Copyright Text-1. */
							esc_html('Powered by','rb-blog-two'),

							/* translators: %2$s: Powered By URL. */
                            esc_url( 'https://profiles.wordpress.org/bashirrased2017/' ),

							/* translators: %3$s: Copyright Text-2. */
							esc_html('Bashir Rased','rb-blog-two'),						

							/* translators: %4$s: Copyright Text-2. */
							esc_html('.','rb-blog-two')
						);
					?>
				</div>

			</div>
		</div>
	</footer>
	<!--============================
    ===== Footer Area End Here =====
    =============================-->

	<!--=====================================
    ===== Scroll to Top Area Start Here =====
    ======================================-->
	<button class="scroll-to-top">
		<i class="fa-solid fa-rocket"></i>
	</button>
	<!--===================================
    ===== Scroll to Top Area End Here =====
    ====================================-->

</div>
<!--===============================
***********************************
***** Page Wrap Area End Here *****
***********************************
================================-->

<?php wp_footer(); ?>

</body>
</html>