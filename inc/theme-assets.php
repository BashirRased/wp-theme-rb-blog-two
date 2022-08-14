<?php
/**
 * Enqueue scripts and styles.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 *
 * @return void
 */

add_editor_style( array(rb_blog_two_google_fonts() ) );
/**
 * Register Google fonts.
 */
function rb_blog_two_google_fonts() {
	$fonts_url = '';
	$font_families = array();
	$font_families[] = 'Josefin Sans:400,700';
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	return esc_url_raw( $fonts_url );
}

function rb_blog_two_scripts() {
	// Google Fonts CSS v1.0.0
	wp_enqueue_style( 'rb-blog-two-google-fonts', rb_blog_two_google_fonts(), '', '1.0.0', 'all');
	
	// Font Awesome CSS v6.1.2
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', '', '6.1.2', 'all');

	// Bootstrap CSS v5.2.0
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '', '5.2.0', 'all');

	// WP Required Stylesheet
	wp_enqueue_style('rb-blog-two-wp-stylesheet', get_stylesheet_uri(),'',wp_get_theme()->get('Version'),'all');

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Responsive CSS v1.0.0
	wp_enqueue_style( 'rb-blog-two-responsive', get_template_directory_uri() . '/assets/css/responsive.css', '', '1.0.0', 'all');

	// Theme Color CSS v1.0.0
	wp_enqueue_style( 'rb-blog-two-theme-color', get_template_directory_uri() . '/assets/css/theme-color.css', '', '1.0.0', 'all');

	// Theme Custom JS v1.0.0
	wp_enqueue_script('rb-blog-two-custom',get_template_directory_uri() . '/assets/js/custom.js',array('jquery'),'1.0.0',true);
}
add_action( 'wp_enqueue_scripts', 'rb_blog_two_scripts' );