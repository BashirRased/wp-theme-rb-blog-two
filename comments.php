<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$rb_blog_two_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $rb_blog_two_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'rb-blog-two' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $rb_blog_two_comment_count, 'Comments title', 'rb-blog-two' ) ),
					esc_html( number_format_i18n( $rb_blog_two_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->

		<ul class="comment-list">
			<?php wp_list_comments(); ?>
		</ul><!-- .comment-list -->

		<?php the_comments_pagination(); ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments">
                <?php esc_html_e( 'Comments are closed.', 'rb-blog-two' ); ?>
            </p>
		<?php endif; ?>

	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
