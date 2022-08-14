<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				?>

				<header class="page-header">
					<h2 class="page-title">
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__( 'Results for "%s"', 'rb-blog-two' ),
							'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
						);
						?>
					</h2>
				</header><!-- .page-header -->

				<div class="search-result-count">
					<?php
					printf(
						esc_html(
							/* translators: %d: The number of search results. */
							_n(
								'We found %d result for your search.',
								'We found %d results for your search.',
								(int) $wp_query->found_posts,
								'rb-blog-two'
							)
						),
						(int) $wp_query->found_posts
					);
					?>
				</div><!-- .search-result-count -->

				<?php
				// Start the Loop.
				while ( have_posts() ) {
					the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
				} // End the loop.

				// Post pagination.
				do_action ( 'rb_blog_two_post_pagination' );

				// If no content, include the "No posts found" template.
			} else {
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