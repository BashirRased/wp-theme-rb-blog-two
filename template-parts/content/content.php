<?php
/**
 * Template part for displaying post items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RB Blog Two
 * @version RB Blog Two 1.0.2
 * @since RB Blog Two 1.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-item' ); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <header class="entry-header">
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="entry-feature">
                            <?php do_action ( 'rb_blog_two_post_thumbnail' ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-meta">
                        <?php
                            do_action ( 'rb_blog_two_author_meta' );
                            do_action ( 'rb_blog_two_date_meta' );
                            do_action ( 'rb_blog_two_cat_meta' );
                            do_action ( 'rb_blog_two_comments_meta' );
                            do_action ( 'rb_blog_two_edit_meta' );
                        ?>
                    </div>
                </header>

                <?php if ( get_the_content() ) : ?>
                    <div class="entry-content">
                        <?php 
                            the_excerpt();
                            if ( str_word_count( get_the_content() ) > 30 || empty ( get_the_title() ) ) {
                                do_action ( 'rb_blog_two_read_more_btn' );
                            }
                        ?>
                    </div>
                <?php endif; ?>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</article>