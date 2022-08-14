<?php
if ( ! function_exists( 'rb_blog_two_menu_register' ) ) {
    function rb_blog_two_menu_register() {
        register_nav_menus(
            array(
                'header-menu' => esc_html__( 'Header Menu', 'rb-blog-two' )
            )
        );
    }
    add_action( 'after_setup_theme', 'rb_blog_two_menu_register' );
}
