<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rb-blog-two
 */
?>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .content-area -->
<!--==================================
===== Site Content Area End Here =====
===================================-->

<?php
// Footer Widget
$footer_widget = "";
$footer_widget = get_field( 'rbth_footer_widget_acf' );
if ( $footer_widget == 'on' ) {
    get_template_part( 'template-parts/footer/footer-widget' );
} else {
    if ( true == get_theme_mod ( 'rbth_footer_widget' ) ) {
        get_template_part( 'template-parts/footer/footer-widget' );
    }
}

// Footer Template
if ( function_exists( 'rbth_footer_custom' ) ) {
    do_action( "rbth_footer" );
} else {
    get_template_part( 'template-parts/footer/footer' );
}

// Scroll To Top Template
$scroll_top = "";
$scroll_top = get_field( 'rbth_scroll_top_acf' );
if ( $scroll_top == 'on' ) {
    get_template_part( 'template-parts/footer/scroll-to-top' );
} else {
    if ( true == get_theme_mod ( 'rbth_scroll_top' ) ) {
        get_template_part( 'template-parts/footer/scroll-to-top' );
    }
}

wp_footer();
?>
    </div>
</body>
</html>
