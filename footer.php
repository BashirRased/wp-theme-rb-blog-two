<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB Blog Two
 * @version RB Blog Two 1.0.1
 * @since RB Blog Two 1.0.1
 */
?>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .content-area -->
<!--==================================
===== Site Content Area End Here =====
===================================-->

<?php
// Footer Template
if ( function_exists( 'rbth_footer_custom' ) ) {
    do_action( "rbth_footer" );
} else {
    get_template_part( 'template-parts/footer/footer' );
}

// Scroll To Top Template
if ( function_exists( 'rbth_footer_custom' ) ) {
    do_action( "rbth_footer" );
} else {
    get_template_part( 'template-parts/footer/scroll-to-top' );
}

wp_footer();
?>
    </div>
</body>
</html>
