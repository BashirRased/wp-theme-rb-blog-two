<?php
/**
 * The template for displaying single posts and pages.
 *
 * @package RB Blog Two
 * @version RB Blog Two 1.0.2
 * @since RB Blog Two 1.0.1
 */

get_header();
?>

<!--====================================
===== Site Content Area Start Here =====
=====================================-->
<div id="content" class="site-content">        
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
                        get_template_part( 'template-parts/content/content', 'single' );
                    }
                } else {        
                    // If no content, include the "No posts found" template.
                    get_template_part( 'template-parts/content/content', 'none' );
                }
                ?>
                </main><!-- .site-main -->

                <?php if( has_tag() ) : ?>
                <div class="entry-meta-footer">
                    <?php do_action( "rb_blog_two_tag_meta" ); ?>
                </div>
                <?php endif; ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                ?>

            </div><!-- .content-area -->
        </div>

        <?php get_sidebar();            
get_footer();