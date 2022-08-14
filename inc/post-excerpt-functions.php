<?php
/**
 * Post except functions for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

if ( ! function_exists( 'custom_read_more_text' ) ) {
    /**
     * Creates read more text.
     *
     * @since RB Blog Two 1.0.0
     */
    function custom_read_more_text() {        

        if (!empty(get_the_content()) ){
			printf(
				/* translators:
                %1$s: Post url.
                %2$s: Read more text.
                */
                '<a class="read-more-btn" href="%1$s">%2$s</a>',
                esc_url( get_permalink() ),
                esc_html__( 'Read More', 'rb-blog-two' )
			);
		}
        
    }
    add_action ( 'rb_blog_two_read_more_text', 'custom_read_more_text' );
}


if ( ! function_exists( 'rb_blog_two_excerpt_more' ) ) {
    /**
     * Filter the excerpt more text [...].
     * 
     * @since RB Blog Two 1.0.0
     *
     * @param int $more Excerpt more text.
     * @return int (Maybe) modified excerpt more text.
     */
    function rb_blog_two_excerpt_more($more) {
        return false;
    }
    add_filter('excerpt_more', 'rb_blog_two_excerpt_more');
}

if ( ! function_exists( 'rb_blog_two_excerpt_length' ) ) {
    /**
     * Filter the excerpt length to 30 words.
     * 
     * @since RB Blog Two 1.0.0
     *
     * @param int $length Excerpt length.
     * @return int (Maybe) modified excerpt length.
     */
    function rb_blog_two_excerpt_length($length) {
        return 30;
    }
    add_filter('excerpt_length', 'rb_blog_two_excerpt_length');
}