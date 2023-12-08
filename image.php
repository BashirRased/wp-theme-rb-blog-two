<?php
/**
 * The template for displaying image attachment.
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
<div id="content" class="site-content">        
    <div class="container">
        <div class="row">

        <div class="col-lg-8">
            <div class="content-area">

                <main id="primary" class="site-main">
                    <div class="container">
                        <div class="row">
                            <figure class="wp-block-image">
                            <?php echo wp_get_attachment_image( get_the_ID(), '' );
                                if ( wp_get_attachment_caption() ) : ?>
                                    <figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption() ); ?></figcaption>
                                <?php endif; ?>
                            </figure><!-- .wp-block-image -->

                            <header class="entry-header">
                                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                            </header>
                        </div><!-- .row -->
                    </div><!-- .container -->                    
                </main><!-- .site-main -->

            </div><!-- .content-area -->
        </div>

        <?php get_sidebar();
get_footer();