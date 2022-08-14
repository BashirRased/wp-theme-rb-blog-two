<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

get_header();

$description = get_the_archive_description();

if ( is_active_sidebar( 'sidebar-right' ) ) {
	$col_class = 'col-md-8';
} else {
	$col_class = 'col-md-12';
}
?>

<div class="container">
	<div class="row">
		<div class="<?php echo esc_attr( $col_class ); ?>">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>
					<?php if ( $description ) : ?>
						<div class="archive-description">
							<?php echo wp_kses_post( wpautop( $description ) ); ?>
						</div>
					<?php endif; ?>
				</header><!-- .page-header -->

				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content' );
				endwhile;    

				// Post pagination.
				do_action ( 'rb_blog_two_post_pagination' );
				?>
				
			<?php else :
				get_template_part( 'template-parts/content/content-none' );
				
			endif;
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