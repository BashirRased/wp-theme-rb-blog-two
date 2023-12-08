<?php
/**
 * The breadcrumbs template file loaded under header.php
 *
 * @package RB Blog Two
 * @version RB Blog Two 1.0.2
 * @since RB Blog Two 1.0.1
 */
?>

<!--===================================
===== Breadcrumbs Area Start Here =====
====================================-->
<div class='breadcrumbs-area' style='background-image:url(<?php header_image(); ?>);'>
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