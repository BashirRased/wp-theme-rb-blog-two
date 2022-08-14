<?php
/**
 * Retrieve protected post password form content.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 *
 * @param string      $output The password form HTML output.
 * @param int|WP_Post $post   Optional. Post ID or WP_Post object. Default is global $post.
 * @return string HTML content for password form for password protected post.
 */
if ( function_exists( 'rb_blog_two_menu_register' ) ) { 
    function rb_blog_two_password_form( $output, $post = 0 ) {
        $post   = get_post( $post );
        $label  = 'pwbox-' . ( empty( $post->ID ) ? wp_rand() : $post->ID );
        $output = '<p class="post-password-message">' . esc_html__( 'This content is password protected. Please enter a password to view.', 'rb-blog-two' ) . '</p>
        <form action="' . esc_url( home_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form" method="post">
        <label class="post-password-form__label" for="' . esc_attr( $label ) . '">' . esc_html_x( 'Password', 'Post password form', 'rb-blog-two' ) . '</label><input class="post-password-form__input" name="post_password" id="' . esc_attr( $label ) . '" type="password" size="20" /><input type="submit" class="post-password-form__submit" name="' . esc_attr_x( 'Submit', 'Post password form', 'rb-blog-two' ) . '" value="' . esc_attr_x( 'Enter', 'Post password form', 'rb-blog-two' ) . '" /></form>
        ';
        return $output;
    }
    add_filter( 'the_password_form', 'rb_blog_two_password_form', 10, 2 );
}