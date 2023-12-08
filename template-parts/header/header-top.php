<?php
/**
 * The header top template file loaded under header.php
 *
 * @package rb-blog-two
 */

$header_top_class = "";
$align_right_class = "";
if ( true == get_theme_mod ( 'rbth_time_show' ) && true == get_theme_mod ( 'rbth_date_show' ) ) {
    $header_top_class = "col-lg-6";
    $align_right_class = "text-lg-end";
} else {
    $header_top_class = "col-lg-12";
    $align_right_class = "text-lg-end";
}
?>

<!--==================================
===== Header Top Area Start Here =====
===================================-->
<div class="header-top-area">
    <div class="container">
        <div class="row">

            <?php if ( true == get_theme_mod ( 'rbth_time_show' ) ) : ?>
            <!--===== Header Top Left Area Start Here =====-->
            <div class="<?php echo esc_attr($header_top_class); ?>">
                <div class="header-top-left">
                    <i class="fa-solid fa-clock"></i>
                    <span id="time"></span>
                </div>
            </div>
            <!--===== Header Top Left Area Start Here =====-->
            <?php endif; ?>

            <?php if ( true == get_theme_mod ( 'rbth_date_show' ) ) : ?>
            <!--===== Header Top Right Area Start Here =====-->
            <div class="<?php echo esc_attr($header_top_class); ?>">
                <div class="header-top-right <?php echo esc_attr( $align_right_class ); ?>">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>
                        <?php echo esc_html( date_i18n( 'l, jS F Y' ),'rb-blog-two' ); ?>
                   </span>
                </div>
            </div>
            <!--===== Header Top Right Area End Here =====-->
            <?php endif; ?>

        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!--================================
===== Header Top Area End Here =====
=================================-->