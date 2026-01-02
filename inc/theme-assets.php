<?php
/**
 * Theme all assets loading.
 *
 * @package RB_Themes
 * @subpackage RB_Blog_Two
 */

/**
 * =================================
 * ----- Table of Theme Assets -----
 * =================================
 * +++++ 01. Prefix with file directory
 * +++++ 02. Remove Elementor FontAwesome
 * +++++ 03. Google Fonts
 * +++++ 04. WordPress Assets
 * +++++ 05. Custom Assets
 */

// 01. Prefix with file directory.
define( 'RB_BLOG_TWO_URL', get_template_directory_uri() );
define( 'RB_BLOG_TWO_CSS', RB_BLOG_TWO_URL . '/assets/css/' );
define( 'RB_BLOG_TWO_JS', RB_BLOG_TWO_URL . '/assets/js/' );

// 02. Remove Elementor FontAwesome.
if ( ! function_exists( 'rb_blog_two_remove_elementor_font_awesome' ) ) {
	/**
	 * Remove Elementor default Font Awesome.
	 */
	function rb_blog_two_remove_elementor_font_awesome() {

		// Remove Elementor registered FA styles.
		wp_deregister_style( 'elementor-icons-fa-solid' );
		wp_deregister_style( 'elementor-icons-fa-regular' );
		wp_deregister_style( 'elementor-icons-fa-brands' );
		wp_deregister_style( 'elementor-icons-fa' );

		// Sometimes Elementor Pro uses this handle.
		wp_deregister_style( 'font-awesome' );
	}
	add_action( 'elementor/frontend/after_register_styles', 'rb_blog_two_remove_elementor_font_awesome', 5 );
}

// 03. Google Fonts.
if ( ! function_exists( 'rb_blog_two_google_fonts' ) ) {
	/**
	 * Enqueue Google Fonts dynamically from an array.
	 */
	function rb_blog_two_google_fonts() {
		$google_font_version = null;

		$google_font_path_start = 'https://fonts.googleapis.com/css2?';
		$google_font_path_end   = '&display=swap&subset=latin,latin-ext,cyrillic,cyrillic-ext,vietnamese';

		$google_font_family_path           = 'family=';
		$google_font_family_with_italic    = ':ital,wght@';
		$google_font_family_without_italic = ':wght@';

		$google_font_family_1_name        = 'Josefin+Sans';
		$google_font_family_1_weight_list = array( '300', '600' );
		$google_font_family_1_weight      = implode( ';', $google_font_family_1_weight_list );
		$google_font_family_1             = $google_font_family_path . $google_font_family_1_name . $google_font_family_without_italic . $google_font_family_1_weight;

		$google_font_families = array( $google_font_family_1 );
		$google_font_family   = implode( '&', $google_font_families );

		$google_font_path = $google_font_path_start . $google_font_family . $google_font_path_end;

		// Nunito, Figtree, Caveat with full weights and subsets.
		wp_enqueue_style(
			'rb-blog-two-google-fonts',
			$google_font_path,
			array(),
			$google_font_version // Using time() is okay for development, but remove in production for caching.
		);
	}
	add_action( 'wp_enqueue_scripts', 'rb_blog_two_google_fonts' );
}

// 04. WordPress Assets.
if ( ! function_exists( 'rb_blog_two_wp_assets' ) ) {
	/**
	 * Enqueue WordPress core assets.
	 */
	function rb_blog_two_wp_assets() {

		// WP Required Style.
		wp_enqueue_style(
			'rb-blog-two-wp-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' ),
			'all'
		);

		// Threaded comment reply script.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'rb_blog_two_wp_assets' );
}

// 05. Custom Assets.
if ( ! function_exists( 'rb_blog_two_theme_custom_assets' ) ) {
	/**
	 * Enqueue theme custom CSS & JS.
	 */
	function rb_blog_two_theme_custom_assets() {
		// Theme Style CSS.
		wp_enqueue_style(
			'rb-blog-two-default',
			RB_BLOG_TWO_CSS . 'default.css',
			array(),
			time(),
			'all'
		);

		// Theme Style CSS.
		wp_enqueue_style(
			'rb-blog-two-style',
			RB_BLOG_TWO_CSS . 'style.css',
			array(),
			time(),
			'all'
		);

		// Responsive CSS.
		wp_enqueue_style(
			'rb-blog-two-responsive',
			RB_BLOG_TWO_CSS . 'responsive.css',
			array(),
			time(),
			'all'
		);

		// Theme Custom JS.
		wp_enqueue_script(
			'rb-blog-two-custom',
			RB_BLOG_TWO_JS . 'custom.js',
			array( 'jquery' ),
			time(),
			true
		);
	}
	add_action( 'wp_enqueue_scripts', 'rb_blog_two_theme_custom_assets' );
}
