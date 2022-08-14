<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages();
		?>
	</div><!-- .entry-content -->
    
</article><!-- #post-<?php the_ID(); ?> -->
