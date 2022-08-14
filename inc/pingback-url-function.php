<?php
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 *
 * @return void
 */
if ( function_exists( 'rb_blog_two_pingback_header' ) ) { 
	function rb_blog_two_pingback_header() {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}
	}
	add_action( 'wp_head', 'rb_blog_two_pingback_header' );
}