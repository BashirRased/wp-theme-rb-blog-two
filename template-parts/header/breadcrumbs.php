<?php
/**
 * Displays breadcrumbs.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */
?>

<div class="breadcrumbs-area" <?php if( has_header_image() ): ?>style="background-image: url(<?php header_image(); ?>);" <?php endif; ?>>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="breadcrumbs">
                    <?php do_action( 'rb_blog_two_breadcrumbs' ); ?>
                </div>                
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .breadcrumbs -->