<?php
/**
 * The template for displaying image attachments
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

get_header();

if ( is_active_sidebar( 'sidebar-right' ) ) {
	$col_class = 'col-md-8';
} else {
	$col_class = 'col-md-12';
}
?>

<div class="container">
	<div class="row">
		<div class="<?php echo esc_attr( $col_class ); ?>">
			<?php
			// Start the loop.
			while ( have_posts() ) {
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php
						do_action( 'rb_blog_two_post_sticky' );
						do_action( 'rb_blog_two_post_visibility' );
						do_action( 'rb_blog_two_post_format' );	the_title( '<h2 class="entry-title">', '</h2>' );
						?>
					</header><!-- .entry-header -->
					

					<div class="entry-meta">
						<?php
						do_action( 'rb_blog_two_post_author' );
						do_action( 'rb_blog_two_post_publish_date' );
						do_action( 'rb_blog_two_post_categories' );
						do_action( 'rb_blog_two_post_comments_count' );
						do_action( 'rb_blog_two_post_edit' );
						?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<figure class="wp-block-image">
							<?php
							/**
							 * Filter the default image attachment size.
							 *
							 * @since RB Blog Two 1.0.0
							 *
							 * @param string $image_size Image size. Default 'full'.
							 */
							$image_size = apply_filters( 'rb_blog_two_attachment_size', 'full' );
							echo wp_get_attachment_image( get_the_ID(), $image_size );
							?>

							<?php if ( wp_get_attachment_caption() ) : ?>
								<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption() ); ?></figcaption>
							<?php endif; ?>
						</figure><!-- .wp-block-image -->

						<?php
						the_content();
						do_action( 'rb_blog_two_pages_link' );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php do_action( 'rb_blog_two_post_tags' ); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php
				// If comments are open or there is at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			} // End the loop.
			?>

		</div><!-- $col_class -->

		<?php
			if( is_active_sidebar( 'sidebar-right' ) ){
				get_sidebar();
			}
		?>
		
	</div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
