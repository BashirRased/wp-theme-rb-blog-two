<?php
/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 *
 * @link https://git.io/vWdr2
 */

if (! function_exists( 'rb_blog_two_skip_link_focus_fix' ) ){
    function rb_blog_two_skip_link_focus_fix() {

        // If SCRIPT_DEBUG is defined and true, print the unminified file.
        if ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
            echo '<script>';
            include get_template_directory().'/assets/js/skip-link-focus-fix.js';
            echo '</script>';
        }
    
        // The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
        ?>
        <script>
        /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
        </script>
        <?php
    }
    add_action('wp_print_footer_scripts', 'rb_blog_two_skip_link_focus_fix');
}