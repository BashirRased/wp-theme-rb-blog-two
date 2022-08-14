<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content-single' );

				if ( is_attachment() ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: Parent post link. */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'rb-blog-two' ), '%title' ),
						)
					);
				}

				// If comments are open or there is at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
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