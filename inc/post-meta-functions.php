<?php
/**
 * Post meta functions for this theme
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

if ( ! function_exists( 'custom_post_sticky' ) ) {
	/**
	 * Prints HTML with meta information for the current post sticky.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_sticky() {
		if ( is_sticky() ) {
			printf(
                /* translators: %s: Post sticky text. */
                '<span class="posted-sticky"><i class="fa-solid fa-thumbtack"></i> <strong>%s</strong></span>',
                esc_html__('Post Sticky', 'rb-blog-two')
            );
		}
	}
	add_action( 'rb_blog_two_post_sticky', 'custom_post_sticky' );
}

if ( ! function_exists( 'custom_post_visibility' ) ) {
	/**
	 * Prints HTML with meta information for the current post visibility.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_visibility() {
		
		if ( post_password_required() ) {
			printf(
                /* translators: Post visibility text. */
                '<span class="posted-visibility"><i class="fa-solid fa-lock"></i> <strong>%s</strong></span>',
                esc_html__('Password Protected Post', 'rb-blog-two')
            );
		}

		if ( get_post_status () == 'private' ) {
			printf(
                /* translators: Post visibility text. */
                '<span class="posted-visibility"><i class="fa-solid fa-user-lock"></i> <strong>%s</strong></span>',
                esc_html__('Private Post', 'rb-blog-two')
            );
		}

	}
	add_action( 'rb_blog_two_post_visibility', 'custom_post_visibility' );
}

if ( ! function_exists( 'custom_post_format' ) ) {
	/**
	 * Prints HTML with meta information for the current post format.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_format() {
		$post_format = get_post_format();

		// aside post format
		if ( 'aside' === $post_format ) {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Aside', 'rb-blog-two')
            );
		}

		// audio post format
		elseif ( 'audio' === $post_format ) {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Audio', 'rb-blog-two')
            );
		}

		// chat post format
		elseif ( 'chat' === $post_format ) {
            printf(
                /* translators:  Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Chat', 'rb-blog-two')
            );
		}

		// gallery post format
		elseif ( 'gallery' === $post_format ) {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Gallery', 'rb-blog-two')
            );
		}

		// image post format
		elseif ( 'image' === $post_format ) {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Image', 'rb-blog-two')
            );
		}

		// link post format
		elseif ( 'link' === $post_format ) {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Link', 'rb-blog-two')
            );
		}

		// quote post format
		elseif ( 'quote' === $post_format ) {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Quote', 'rb-blog-two')
            );
		}

		// status post format
		elseif ( 'status' === $post_format ) {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Status', 'rb-blog-two')
            );
		}

		// video post format
		elseif ( 'video' === $post_format ) {
            printf(
                /* translators:  Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Video', 'rb-blog-two')
            );
		}		

		// standard post format
		else {
            printf(
                /* translators: Post format text. */
                '<span class="posted-format"><i class="fa-solid fa-blog"></i> <strong>%s</strong></span>',
                esc_html__('Standard', 'rb-blog-two')
            );
		}

	}
	add_action( 'rb_blog_two_post_format', 'custom_post_format' );
}

if ( ! function_exists( 'custom_post_author' ) ) {
	/**
	 * Prints HTML with meta information about theme author.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_author() {
		printf(
			/* translators: %s: Author name. */
			'<span class="posted-by"><i class="fa-solid fa-user"></i> %s</span>',
			'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author(), 'rb-blog-two' ) . '</a>'
		);
	}
	add_action( 'rb_blog_two_post_author', 'custom_post_author' );
}

if ( ! function_exists( 'custom_post_publish_date' ) ) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_publish_date() {
		$archive_year  = get_the_time('Y');
		$archive_month = get_the_time('m');
		$archive_date = get_the_time('d');

		$time_string = '<time class="entry-date" datetime="%1$s"><i class="fa-solid fa-clock"></i> <a href="%2$s">%3$s</a></time>';		

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_url(get_day_link($archive_year, $archive_month, $archive_date)),
			esc_html( get_the_date() )
		);
		echo '<span class="posted-on">';
		printf(
			/* translators: %s: Publish date. */
			esc_html__( '%s', 'rb-blog-two' ),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
	add_action( 'rb_blog_two_post_publish_date', 'custom_post_publish_date' );
}

if ( ! function_exists( 'custom_post_categories' ) ) {
	/**
	 * Prints HTML with meta information for the current categories.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_categories() {
		if ( has_category() ) {
			$categories_list = get_the_category_list( ', ' );
			if ( $categories_list ) {
				printf(
					/* translators: %s: List of categories. */
					'<span class="cat-links"><i class="fa-solid fa-folder-open"></i> ' . esc_html__( '%s', 'rb-blog-two' ) . ' </span>',
					$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
				);
			}
		}
	}
	add_action( 'rb_blog_two_post_categories', 'custom_post_categories' );
}

if ( ! function_exists( 'custom_post_tags' ) ) {
	/**
	 * Prints HTML with meta information for the current tags.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_tags() {
		if ( has_tag() ) {
			$tags_list = get_the_tag_list( '', ', ' );
			if ( $tags_list ) {
				printf(
					/* translators: %s: List of tags. */
					'<span class="tags-links">' . esc_html__( 'Tags %s', 'rb-blog-two' ) . '</span>',
					$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
				);
			}
		}
	}
}
add_action( 'rb_blog_two_post_tags', 'custom_post_tags' );

if ( ! function_exists( 'custom_comments_count' ) ) {
	/**
	 * Current post edit.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_comments_count() {
		echo '<span class="comments-count"><i class="fa-solid fa-comments"></i> ';
		comments_popup_link(
			__('No Comments','rb-blog-two'),
			__('1 Comment','rb-blog-two'),
			__('% Comments','rb-blog-two'),
			'',
			__('Comments Off','rb-blog-two')
		);
		echo '</span>';
	}
	add_action( 'rb_blog_two_post_comments_count', 'custom_comments_count' );
}

if ( ! function_exists( 'custom_post_edit' ) ) {
	/**
	 * Current post edit.
	 *
	 * @since RB Blog Two 1.0.0
	 *
	 * @return void
	 */
	function custom_post_edit() {
		echo '<span class="edit-link"><i class="fa-solid fa-user-pen"></i> ';
		edit_post_link(
			sprintf(
				/* translators: %s: Post title. Only visible to screen readers. */
				esc_html__( 'Edit', 'rb-blog-two' )
			),
		);
		echo '</span>';
	}
	add_action( 'rb_blog_two_post_edit', 'custom_post_edit' );
}