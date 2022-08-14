<?php
/**
 * Register widget area.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */


function rb_blog_two_widgets_init() {

    register_sidebar(
        array(
            'name'          => esc_html__( 'Right Sidebar', 'rb-blog-two' ),
            'id'            => 'sidebar-right',
            'description'   => esc_html__( 'Add widgets here to appear in your right sidebar.', 'rb-blog-two' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'rb_blog_two_widgets_init' );