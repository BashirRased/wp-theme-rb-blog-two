<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

// Theme Setup
if( file_exists( dirname( __FILE__ ) . '/inc/theme-setup.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/theme-setup.php' );
}

// Theme Assets
if( file_exists( dirname( __FILE__ ) . '/inc/theme-assets.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/theme-assets.php' );
}

// Menu Registration
if( file_exists( dirname( __FILE__ ) . '/inc/menu-registration.php' ) ) {
	require_once(dirname( __FILE__ ) . '/inc/menu-registration.php' );
}

// Widget Registration
if( file_exists( dirname( __FILE__ ) . '/inc/widget-registration.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/widget-registration.php' );
}

// Pingback URL
if( file_exists( dirname( __FILE__ ) . '/inc/pingback-url-function.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/pingback-url-function.php' );
}

// Post Title
if( file_exists( dirname( __FILE__ ) . '/inc/post-title-function.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/post-title-function.php' );
}

// Post Thumbnail
if( file_exists( dirname( __FILE__ ) . '/inc/post-thumbnail-function.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/post-thumbnail-function.php');
}

// Post Excerpt
if( file_exists( dirname( __FILE__ ) . '/inc/post-excerpt-functions.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/post-excerpt-functions.php' );
}

// Post Content
if( file_exists( dirname( __FILE__ ) . '/inc/post-content-block-functions.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/post-content-block-functions.php');
}

// Post Meta
if( file_exists( dirname( __FILE__ ) . '/inc/post-meta-functions.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/post-meta-functions.php' );
}

// Breadcrumbs
if( file_exists( dirname( __FILE__ ) . '/inc/breadcrumbs-function.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/breadcrumbs-function.php' );
}

// Password Post Comment Form
if( file_exists( dirname( __FILE__ ) . '/inc/comment-password-form.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/comment-password-form.php' );
}

// Skip Link Focus Fix
if( file_exists( dirname( __FILE__ ) . '/inc/skip-link-focus-fix.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/skip-link-focus-fix.php' );
}