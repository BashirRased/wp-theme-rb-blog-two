<?php
/**
 * Post thumbnail display for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

if ( ! function_exists(  'rb_blog_two_can_show_post_thumbnail' ) ) {
    /**
     * Determines if post thumbnail can be displayed.
     *
     * @since RB Blog Two 1.0.0
     *
     * @return bool
     */
    function rb_blog_two_can_show_post_thumbnail() {
        /**
         * Filters whether post thumbnail can be displayed.
         *
         * @since RB Blog Two 1.0.0
         *
         * @param bool $show_post_thumbnail Whether to show post thumbnail.
         */
        return apply_filters(
            'rb_blog_two_can_show_post_thumbnail',
            ! post_password_required() && ! is_attachment() && has_post_thumbnail()
        );
    }
}

if ( ! function_exists( 'custom_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_thumbnail() {
		if ( ! rb_blog_two_can_show_post_thumbnail() ) {
			return;
		}
		?>

        <figure class="post-thumbnail">
            <?php
            // Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
            the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
            ?>
            <?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
                <figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
            <?php endif; ?>
        </figure><!-- .post-thumbnail -->

		<?php
	}
    add_action( 'rb_blog_two_post_thumbnail', 'custom_post_thumbnail');
}
