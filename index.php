<?php
/**
 * The main template file
 *
 * @package RB Blog Two
 * @version RB Blog Two 1.0.1
 * @since RB Blog Two 1.0.1
 */

get_header();
?>

<!--====================================
===== Site Content Area Start Here =====
=====================================-->
<div id="page-content" class="site-content">        
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8">
                <div class="content-area">

                    <main id="primary" class="site-main">
                    <?php
                        if ( have_posts() ) {
                            // Load posts loop.
                            while ( have_posts() ) {
                                the_post();
                                get_template_part( 'template-parts/content/content' );
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

            <?php get_sidebar();            
get_footer();