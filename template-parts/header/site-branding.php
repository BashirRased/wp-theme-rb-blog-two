<?php
/**
 * Displays header site branding.
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description' );
?>
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="site-branding-inner">               

                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="site-branding">

                        <?php if ( $blog_info ) : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php echo esc_html( $blog_info ); ?>
                                </a>
                            </h1>
                        <?php endif; ?>                

                        <?php if ( $description ) : ?>
                            <p class="site-description">
                                <?php echo esc_html( $description ); ?>
                            </p>
                        <?php endif; ?>

                    </div><!-- .site-branding -->

                </div><!-- .site-branding-inner -->

            </div><!-- .col-md-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .site-branding -->