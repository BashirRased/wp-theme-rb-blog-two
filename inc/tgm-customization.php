<?php
/**
 * The template for tgm all required & recommander plugin list.
 * 
 * The template loading under functions.php
 * 
 * @package RB Blog Two
 * @version RB Blog Two 1.0.1
 * @since RB Blog Two 1.0.1
 */
 
function rb_blog_two_required_plugins() {

	$plugins = array(

		// Breadcrumb NavXT
		array(
			'name'      => __( 'Breadcrumb NavXT', 'rb-blog-two' ),
			'slug'      => 'breadcrumb-navxt',
			'recommend'  => true,
		),

	);

	$config = array(
		'id'           => 'tgmpa', 
		'default_path' => '', 
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php', 
		'capability'   => 'edit_theme_options',  
		'has_notices'  => true, 
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => ''
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'rb_blog_two_required_plugins' );