<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
<div id="page-content" class="site-content">        
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8">
                <div class="content-area">

                    <main id="primary" class="site-main">
                        <section class="error-page text-center">

                            <header class="page-header">
                                <h1 class="page-header-title">
                                    <?php esc_html_e('404', 'rb-blog-two'); ?>
                                </h1>
                                <h4 class="header-subtitle">
                                    <?php esc_html_e('Page Not Found', 'rb-blog-two'); ?>
                                </h4>
                            </header><!-- .page-header -->

                            <div class="error-content">
                                <p>
                                    <?php esc_html_e('Whoops, this is embarassing. Looks like the page you were looking for was not found.', 'rb-blog-two'); ?>
                                </p>
                                <a class="theme-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php esc_html_e('Back To Home', 'rb-blog-two'); ?>
                                </a>
                            </div><!-- .error-content -->
                        
                        </section><!-- .error-page -->
                    </main><!-- .site-main -->

                    <?php do_action( "rb_blog_two_pagination" ); ?>
                    
                </div><!-- .content-area -->
            </div>

            <?php get_sidebar();            
get_footer();