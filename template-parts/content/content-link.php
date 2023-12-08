<?php
/**
 * Template part for displaying post items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rb-blog-two
 */

$link_file = "";
$link_file = get_field( 'rbth_post_link' );
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

                        // Post Meta List
                        $post_meta_list_blog = get_theme_mod( 'rbth_post_meta_list_single' );
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

                <?php if ( get_the_content() || empty( $link_file ) ) : ?>
                <div class="entry-content">
                    <?php
                    if( !empty( $link_file ) ):
                        $link_url = $link_file['url'];
                        $link_title = $link_file['title'];
                        $link_target = $link_file['target'] ? $link_file['target'] : '_self';
                    ?>
                        <a class="link-post" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
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