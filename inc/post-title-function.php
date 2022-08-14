<?php
/**
 * Post title function for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

if ( ! function_exists( 'rb_blog_two_post_title' ) ) {
	/**
	 * Adds a title to posts and pages that are missing titles.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @param string $title The title.
	 * @return string
	 */
	function rb_blog_two_post_title( $title ) {
		return '' === $title ? esc_html_x( 'Untitled', 'Added to posts and pages that are missing titles', 'rb-blog-two' ) : $title;
	}
}
add_filter( 'the_title', 'rb_blog_two_post_title' );