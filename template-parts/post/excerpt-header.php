<?php
/**
 * Displays the post header
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

// Don't show the title if the post-format is `aside` or `status`.
$post_format = get_post_format();
if ( 'aside' === $post_format || 'status' === $post_format ) {
	return;
}
?>

<header class="entry-header">
    <?php
    do_action( 'rb-blog-two-post-format' );	
    the_title( '<h1 class="entry-title">', '</h1>' );
    ?>
</header><!-- .entry-header -->

<?php do_action( 'rb-blog-two-post-thumbnail' ); ?>

<div class="entry-meta">
    <?php
    do_action( 'rb-blog-two-post-author' );
    do_action( 'rb-blog-two-post-publish-date' );
    do_action( 'rb-blog-two-post-categories' );
    do_action( 'rb-blog-two-post-comments-count' );
    do_action( 'rb-blog-two-post-edit' );
    ?>
</div><!-- .entry-meta -->