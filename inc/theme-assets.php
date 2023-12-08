<?php
/**
 * Loading all css & js files.
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 * The template loading under functions.php
 * 
 * @package RB Blog Two
 * @version RB Blog Two 1.0.2
 * @since RB Blog Two 1.0.1
 */

 /*==================================
Table of Theme Assets List Start Here
=====================================
	01. Prefix with file directory
	02. Google Fonts
	03. Custom Assets
	04. WordPress Assets
===================================
Table of Theme Assets List End Here
=================================*/
 
/*****************************************
***** 01. Prefix with file directory *****
*****************************************/
define( 'RB_Blog_Two_URL', get_template_directory_uri() );
define( 'RB_Blog_Two_CSS',RB_Blog_Two_URL.'/assets/css/' );
define( 'RB_Blog_Two_JS',RB_Blog_Two_URL.'/assets/js/' );

/***************************
***** 02. Google Fonts *****
***************************/
add_editor_style( array(rb_blog_two_google_fonts() ) );
/**
 * Register Google fonts.
 */
function rb_blog_two_google_fonts() {
	$fonts_url = '';
	$font_families = array();
	$font_families[] = 'Josefin Sans:300';
	$font_families[] = 'Josefin Sans:600';
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) )
	);
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	return esc_url_raw( $fonts_url );
}

function rb_blog_two_google_font_css(){
    // Google Font
	wp_enqueue_style( 'rb-blog-two-google-font', rb_blog_two_google_fonts(), '', wp_get_theme()->get('Version'), 'all' );
}
add_action( 'wp_enqueue_scripts', 'rb_blog_two_google_font_css' );

/****************************
***** 03. Custom Assets *****
****************************/
function rb_blog_two_theme_custom_assets(){
    // Default CSS
    wp_enqueue_style( 'rb-blog-two-default', RB_Blog_Two_CSS . 'default.css','', time(), 'all' );

    // Theme Style CSS
    wp_enqueue_style( 'rb-blog-two-style', RB_Blog_Two_CSS . 'style.css', '', time(), 'all' );

    // Responsive CSS
    wp_enqueue_style( 'rb-blog-two-responsive', RB_Blog_Two_CSS . 'responsive.css', '', time(), 'all' );	

    // Theme Custom JS
    wp_enqueue_script( 'rb-blog-two-custom', RB_Blog_Two_JS . 'custom.js',array( 'jquery' ), time(), true );
}
add_action('wp_enqueue_scripts','rb_blog_two_theme_custom_assets');

/*******************************
***** 04. WordPress Assets *****
*******************************/
function rb_blog_two_wp_assets() {
    // WP Required Style
	wp_enqueue_style('rb-blog-two-wp-style', get_stylesheet_uri(), '', time(), 'all');

    // Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' )) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rb_blog_two_wp_assets' );