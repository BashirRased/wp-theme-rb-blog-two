<?php
/**
 * The template for displaying all single pages
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
				get_template_part( 'template-parts/content/content-page' );

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