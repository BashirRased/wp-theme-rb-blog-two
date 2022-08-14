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

<div class="header-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if ( has_nav_menu( 'header-menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'  => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'header-menu'
                    ));
                }
                ?>
            </div>
        </div>
    </div>
</div>