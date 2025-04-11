<?php 
/**
 * widget add functions.
 * 
 * @link https://developer.wordpress.org/themes/functionality/widgets/
 * 
 * The file loading under functions.php
 *
 * @package rb-blog-two
 */
 
function rb_blog_two_widget_area() {
	// Blog Widget
	register_sidebar(array(
		'name' 			=> __( 'Sidebar 1', 'rb-blog-two' ),
		'description' 	=> __( 'Add your widgets in sidebar 1',  'rb-blog-two' ),
		'id' 			=> 'sidebar-1',
        'before_sidebar'=> '<aside id="secondary" class="widget-area col-lg-4">',
		'after_sidebar' => '</aside>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title' 	=> '</h2>'
	));

	// Footer Widgets
    for ( $num = 1; $num <= 5; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'rb-blog-two' ), $num ),
            'id'            => 'footer-' . $num,
            'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ] );
    }
}
add_action( 'widgets_init', 'rb_blog_two_widget_area' );