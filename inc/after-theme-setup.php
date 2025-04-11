<?php
/**
 * After theme setup functions.
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/#theme-setup
 * 
 * The file loading under functions.php
 *
 * @package rb-blog-two
 */

if ( ! function_exists( 'rb_blog_two_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
    function rb_blog_two_theme_setup() {        
        /*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'rb-blog-two', get_template_directory(). '/languages' );

        // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

        /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Menu Register
        register_nav_menu( 'header_menu', __( 'Header Menu', 'rb-blog-two' ) );

		// Set content-width.
        $GLOBALS['content_width'] = apply_filters( 'rb_blog_two_content_width', 1080  );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		$html = array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets'
        );
        add_theme_support( 'html5', $html ); 

        /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		$custom_logo = array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		);
		add_theme_support( 'custom-logo', $custom_logo );

		// Custom header.
        $custom_header = array(
            'width'              => 1110,
            'height'             => 450,
            'flex-width'         => true,
            'flex-height'        => true,
        );
        add_theme_support( 'custom-header', $custom_header );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

        // Custom background color.		
		$custom_bg = array(
			'default-color' => 'd1e4dd',
		);
		add_theme_support( 'custom-background', $custom_bg ); 

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

	}
}
add_action( 'after_setup_theme', 'rb_blog_two_theme_setup' );