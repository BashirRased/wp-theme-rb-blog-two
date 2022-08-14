<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
    rb_blog_two_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	rb_blog_two_print_first_instance_of_block( 'core/embed', $content );
} else {
	rb_blog_two_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
