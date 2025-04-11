<?php
/**
 * The template for tgm all required & recommander plugin list.
 * 
 * The template loading under functions.php
 * 
 * @package rb-blog-two
 */
 
function rb_blog_two_required_plugins() {

	$plugins = array(

		// Breadcrumb NavXT
		array(
			'name'      => __( 'Breadcrumb NavXT', 'rb-blog-two' ),
			'slug'      => 'breadcrumb-navxt',
			'recommend'  => true,
		),

		// Kirki Customizer Framework
		array(
			'name'      => __( 'Kirki Customizer Framework', 'rb-blog-two' ),
			'slug'      => 'kirki',
			'recommend'  => true,
		),

		// Advanced Custom Fields (ACF)
		array(
			'name'      => __( 'Advanced Custom Fields (ACF)', 'rb-blog-two' ),
			'slug'      => 'advanced-custom-fields',
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