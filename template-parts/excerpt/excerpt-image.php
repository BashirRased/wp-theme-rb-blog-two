<?php
/**
 * Show the appropriate content for the Image post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

// If there is no featured-image, print the first image block found.
if (
	! rb_blog_two_can_show_post_thumbnail() &&
	has_block( 'core/image', get_the_content() )
) {

	rb_blog_two_print_first_instance_of_block( 'core/image', get_the_content() );
}

the_excerpt();