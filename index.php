<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content/content' );
				}

				// Post pagination.
				the_posts_pagination();

			} else {

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content-none' );

			}
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