<?php
/**
 * Displays the right sidebar area.
 *
 * @package rb-blog-two
 */

if ( is_active_sidebar( 'sidebar-1' ) ) {
    dynamic_sidebar( 'sidebar-1' );
}