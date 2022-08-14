<?php
/**
 * Post content block functions for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

if ( function_exists( 'rb_blog_two_print_first_instance_of_block' ) ) {
    /**
     * Print the first instance of a block in the content, and then break away.
     *
     * @since RB Blog Two 1.0.0
     *
     * @param string      $block_name The full block type name, or a partial match.
     *                                Example: `core/image`, `core-embed/*`.
     * @param string|null $content    The content to search in. Use null for get_the_content().
     * @param int         $instances  How many instances of the block will be printed (max). Default  1.
     * @return bool Returns true if a block was located & printed, otherwise false.
     */
    function rb_blog_two_print_first_instance_of_block( $block_name, $content = null, $instances = 1 ) {
        
        $instances_count = 0;
        $blocks_content  = '';

        if ( ! $content ) {
            $content = get_the_content();
        }

        // Parse blocks in the content.
        $blocks = parse_blocks( $content );

        // Loop blocks.
        foreach ( $blocks as $block ) {

            // Sanity check.
            if ( ! isset( $block['blockName'] ) ) {
                continue;
            }

            // Check if this the block matches the $block_name.
            $is_matching_block = false;

            // If the block ends with *, try to match the first portion.
            if ( '*' === $block_name[-1] ) {
                $is_matching_block = 0 === strpos( $block['blockName'], rtrim( $block_name, '*' ) );
            } else {
                $is_matching_block = $block_name === $block['blockName'];
            }

            if ( $is_matching_block ) {
                // Increment count.
                $instances_count++;

                // Add the block HTML.
                $blocks_content .= render_block( $block );

                // Break the loop if the $instances count was reached.
                if ( $instances_count >= $instances ) {
                    break;
                }
            }
        }

        if ( $blocks_content ) {
            /** This filter is documented in wp-includes/post-template.php */
            echo apply_filters( 'the_content', $blocks_content ); // phpcs:ignore WordPress.Security.EscapeOutput
            return true;
        }

        return false;
    }
}