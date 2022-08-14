<?php
/**
 * Displays header top.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */
?>

<div class="header-top">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="current-time-display">
                    <i class="fa-solid fa-clock"></i>
                    <span id="time"></span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="current-date-display">
                    <i class="fa-solid fa-calendar-days"></i>
                    <?php echo esc_html( date_i18n( 'l, jS F Y' ),'rb-blog-two' ); ?>
                </div>
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .header-top -->