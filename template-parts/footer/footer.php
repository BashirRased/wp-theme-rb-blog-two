<?php
/**
 * The file loading under footer.php
 *
 * @package rb-blog-two
 */
?>

<!--==============================
===== Footer Area Start Here =====
===============================-->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
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
            <div class="col-lg-6">
                <?php
                    printf(
                        '<p class="powered-by-text float-lg-end">%1$s <a href="%2$s" target="_blank">%3$s</a>%4$s</p>',
                        
                        /* translators: %1$s: Copyright Text-1. */
                        esc_html('Powered by','rb-blog-two'),

                        /* translators: %2$s: Powered By URL. */
                        esc_url( 'https://bashirrased.com/' ),

                        /* translators: %3$s: Copyright Text-2. */
                        esc_html('Bashir Rased','rb-blog-two'),

                        /* translators: %4$s: Copyright Text-2. */
                        esc_html('.','rb-blog-two')
                    );
                ?>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</footer>
<!--============================
===== Footer Area End Here =====
=============================--> 