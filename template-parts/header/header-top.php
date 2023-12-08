<?php
/**
 * The header top template file loaded under header.php
 *
 * @package RB Blog Two
 * @version RB Blog Two 1.0.2
 * @since RB Blog Two 1.0.1
 */
?>

<!--==================================
===== Header Top Area Start Here =====
===================================-->
<div class="header-top-area">
    <div class="container">
        <div class="row">

            <!--===== Header Top Left Area Start Here =====-->
            <div class="col-lg-6">
                <div class="header-top-left">
                    <i class="fa-solid fa-clock"></i>
                    <span id="time"></span>
                </div>
            </div>
            <!--===== Header Top Left Area Start Here =====-->

            <!--===== Header Top Right Area Start Here =====-->
            <div class="col-lg-6">
                <div class="header-top-right float-lg-end">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>
                        <?php echo esc_html( date_i18n( 'l, jS F Y' ),'rb-blog-two' ); ?>
                   </span>
                </div>
            </div>
            <!--===== Header Top Right Area End Here =====-->

        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!--================================
===== Header Top Area End Here =====
=================================-->