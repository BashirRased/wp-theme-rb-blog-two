<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$rb_blog_two_unique_id = wp_unique_id( 'search-form-' );
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<label for="<?php echo esc_attr( $rb_blog_two_unique_id ); ?>"><?php _e( 'Search&hellip;', 'rb-blog-two' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>

	<input type="search" id="<?php echo esc_attr( $rb_blog_two_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />

	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'rb-blog-two' ); ?>" />

</form>