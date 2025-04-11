<?php
/**
 * The main template file
 *
 * @package rb-blog-two
 */

get_header();
$sidebar ="";
$main_class = "";
$sidebar_display = "";
$sidebar = get_theme_mod( 'rbth_sidebar_blog' );

if( $sidebar == "left-sidebar" ) {
    $main_class = "col-lg-8";
    $sidebar_display = "left";
}
elseif( $sidebar == "right-sidebar" ) {
    $main_class = "col-lg-8";
    $sidebar_display = "right";
}
else {
    $main_class = "col-lg-12";
}
?>

<!--====================================
===== Site Content Area Start Here =====
=====================================-->
<div id="page-content" class="site-content">        
    <div class="container">
        <div class="row">

            <?php
                if ( $sidebar_display == 'left' ) {
                    get_sidebar();
                }
            ?>
            
            <div class="<?php echo esc_attr( $main_class ); ?>">
                <div class="content-area">

                    <main id="primary" class="site-main">
                    <?php
                        if ( have_posts() ) {
                            // Load posts loop.
                            while ( have_posts() ) {
                                the_post();
                                get_template_part( 'template-parts/excerpt/excerpt', get_post_format() );
                            }                        
                        } else {        
                            // If no content, include the "No posts found" template.
                            get_template_part( 'template-parts/content/content', 'none' );
                        }
                    ?>
                    </main><!-- .site-main -->

                    <?php do_action( "rb_blog_two_pagination" ); ?>
                    
                </div><!-- .content-area -->
            </div>

            <?php
            if ( $sidebar_display == 'right' ) {
                get_sidebar();
            }
get_footer();