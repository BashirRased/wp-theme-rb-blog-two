<?php
/**
 * Template part for displaying post items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rb-blog-two
 */

$post_meta_list_blog = "";
$audio_post = "";
$audio_file = "";
$audio_oembed = "";

$post_meta_list_blog = get_theme_mod( 'rbth_post_meta_list_blog' );

if ( function_exists('get_field') && get_field('rbth_post_audio_file_format') ) {
    $audio_post = get_field( 'rbth_post_audio_file_format' );
}

if ( function_exists('get_field') && get_field('rbth_post_audio_file') ) {
    $audio_file = get_field( 'rbth_post_audio_file' );
}

if ( function_exists('get_field') && get_field('rbth_post_audio_iframe') ) {
    $audio_oembed = get_field( 'rbth_post_audio_iframe' );
}
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
                        if ( true == get_theme_mod( 'rbth_post_meta_blog' ) ) {
                        if ( $post_meta_list_blog ) {
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
                            if( $post_meta_item_blog == "cat-meta" ) {
                                do_action ( 'rb_blog_two_cat_meta' );
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
                    <?php } } else { ?>
                    <div class="entry-meta">
                        <?php
                            do_action ( 'rb_blog_two_author_meta' );
                            do_action ( 'rb_blog_two_date_meta' );
                            do_action ( 'rb_blog_two_cat_meta' );
                            do_action ( 'rb_blog_two_comments_meta' );
                            do_action ( 'rb_blog_two_edit_meta' );
                        ?>
                    </div>
                    <?php } ?>
                    
                </header>

                <?php if ( get_the_content() || !empty($audio_post) ) : ?>
                <div class="entry-content">
                    <?php
                    if ( $audio_post == 'file' ) : ?>
                        <audio controls>
                            <source src="<?php echo esc_url($audio_file['url']); ?>">
                        </audio>
                    <?php elseif ( $audio_post == 'iframe' ) : echo wp_kses_post($audio_oembed); ?>
                    <?php else :
                        the_excerpt();
                    endif;
                    ?>
                </div>
                <?php endif; ?>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</article>