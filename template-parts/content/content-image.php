<?php
/**
 * Template part for displaying post items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rb-blog-two
 */
$post_meta_list_blog ="";
$post_meta_list_blog = get_theme_mod( 'rbth_post_meta_list_single' );

$img_file = "";
$img_file = get_field( 'rbth_post_img' );
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

                    <?php
                        if ( true == get_theme_mod( 'rbth_post_meta_single' ) ) :
                    ?>                    
                    <div class="entry-meta">
                    <?php
                        foreach ( $post_meta_list_blog as $post_meta_item_blog ) {
                            if( $post_meta_item_blog == "author-meta" ) {
                                do_action ( 'rb_blog_two_author_meta' );
                            }
                            if( $post_meta_item_blog == "date-meta" ) {
                                do_action ( 'rb_blog_two_date_meta' );
                            }
                            if( $post_meta_item_blog == "comments-meta" ) {
                                do_action ( 'rb_blog_two_comments_meta' );
                            }
                            if( $post_meta_item_blog == "edit-meta" && is_user_logged_in() && current_user_can( 'edit_posts' ) ) {
                                do_action ( 'rb_blog_two_edit_meta' );
                            }
                        }
                    ?>
                    </div>
                    <?php else : ?>
                    <div class="entry-meta">
                        <?php
                            do_action ( 'rb_blog_two_author_meta' );
                            do_action ( 'rb_blog_two_date_meta' );
                            do_action ( 'rb_blog_two_comments_meta' );
                            do_action ( 'rb_blog_two_edit_meta' );
                        ?>
                    </div>
                    <?php endif; ?>
                </header>

                <?php if ( get_the_content() || !empty($img_file) ) : ?>
                <div class="entry-content">
                    <?php if( !empty( $img_file ) ): ?>
                        <figure>
                            <img src="<?php echo esc_url($img_file['url']); ?>" alt="<?php echo esc_attr($img_file['alt'] , 'rb-blog-two'); ?>" />
                        </figure>
                    <?php the_content(); else :
                        the_content();
                    endif;
                    ?>
                </div>
                <?php endif; ?>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</article>