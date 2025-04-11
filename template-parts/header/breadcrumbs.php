<?php
/**
 * The breadcrumbs template file loaded under header.php
 *
 * @package rb-blog-two
 */
$breadcrumb = "";
$breadcrumb_img = "";
$breadcrumb_img_array = "";
$breadcrumb = get_field( 'rbth_breadcrumb_acf' );
if ( $breadcrumb == 'on' ) {
    $breadcrumb_img_array = get_field( 'rbth_breadcrumb_img_acf' );
    $breadcrumb_img = $breadcrumb_img_array['url'];
}
else {
    if ( true == get_theme_mod ( 'rbth_breadcrumb_switch' ) && get_theme_mod ( 'rbth_breadcrumb_img' ) ) {
        $breadcrumb_img = get_theme_mod ( 'rbth_breadcrumb_img' );
    }
    else {
        $breadcrumb_img =  get_header_image();
    }
}
?>

<!--===================================
===== Breadcrumbs Area Start Here =====
====================================-->
<div class='breadcrumbs-area' style='background-image:url(<?php echo esc_url($breadcrumb_img); ?>);'>
    <div class='container'>
        <div class='row'>

            <div class='col-lg-12'>
                <div class="breadcrumbs-content text-center">
                    <?php
                        do_action( "rb_blog_two_breadcrumbs_title" ); do_action( "rb_blog_two_archive_description" );
                        do_action( "rb_blog_two_breadcrumbs_nav" );
                    ?>
                </div>                
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!--=================================
===== Breadcrumbs Area End Here =====
==================================-->