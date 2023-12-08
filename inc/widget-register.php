<?php 
/**
 * widget add functions.
 * 
 * @link https://developer.wordpress.org/themes/functionality/widgets/
 * 
 * The file loading under functions.php
 *
 * @package RB Blog Two
 * @version RB Blog Two 1.0.2
 * @since RB Blog Two 1.0.1
 */
 
// widget register
function rb_blog_two_widget_area() {
	register_sidebar(array(
		'name' 			=> __( 'Sidebar 1', 'rb-blog-two' ),
		'description' 	=> __( 'Add your widgets in sidebar 1',  'rb-blog-two' ),
		'id' 			=> 'sidebar-1',
        'class'  		=> '',
        'before_sidebar'=> '<aside id="secondary" class="widget-area col-lg-4">',
		'after_sidebar' => '</aside>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title' 	=> '</h2>'
	)); 
    
}
add_action( 'widgets_init', 'rb_blog_two_widget_area' );