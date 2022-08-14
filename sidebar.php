<?php
/**
 * The template for displaying right sidebar
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

if ( ! is_active_sidebar( 'sidebar-right' )) {
	return;
}
?>

<aside class="col-md-4 sidebar-area">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside>