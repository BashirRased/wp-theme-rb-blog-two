<?php
/**
 * Template part for displaying post items
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rb-blog-two
 */

$post_meta_list_blog = "";
$post_meta_list_blog = get_theme_mod( 'rbth_post_meta_list_blog' );

$gallery_img_1 = "";
if ( function_exists('get_field') && get_field('rbth_post_gallery_img_1') ) {
    $gallery_img_1 = get_field( 'rbth_post_gallery_img_1' );
}

$gallery_img_2 = "";
if ( function_exists('get_field') && get_field('rbth_post_gallery_img_2') ) {
    $gallery_img_2 = get_field( 'rbth_post_gallery_img_2' );
}

$gallery_img_3 = "";
if ( function_exists('get_field') && get_field('rbth_post_gallery_img_3') ) {
    $gallery_img_3 = get_field( 'rbth_post_gallery_img_3' );
}

$gallery_img_4 = "";
if ( function_exists('get_field') && get_field('rbth_post_gallery_img_4') ) {
    $gallery_img_4 = get_field( 'rbth_post_gallery_img_4' );
}

$gallery_img_5 = "";
if ( function_exists('get_field') && get_field('rbth_post_gallery_img_5') ) {
    $gallery_img_5 = get_field( 'rbth_post_gallery_img_5' );
}

if ( $gallery_img_1 || $gallery_img_2 || $gallery_img_3 || $gallery_img_4 || $gallery_img_5 ) {
    $gallery_img = "1";
} else {
    $gallery_img = "0";
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

                <?php if ( get_the_content() || $gallery_img == "1" ) : ?>
                <div class="entry-content">
                    <?php if( $gallery_img == "1" ) : ?>
                    <div class="swiper post-img-gallery">
                        <div class="swiper-wrapper">
                            <!-- Gallery Image 01 -->
                            <?php if( !empty ( $gallery_img_1 ) ) : ?>
                                <figure class="swiper-slide">
                                    <img src="<?php echo esc_url($gallery_img_1['url']); ?>" alt="<?php echo esc_attr($gallery_img_1['alt']); ?>" />
                                </figure>
                            <?php endif; ?>

                            <!-- Gallery Image 02 -->
                            <?php if( !empty ( $gallery_img_2 ) ) : ?>
                                <figure class="swiper-slide">
                                    <img src="<?php echo esc_url($gallery_img_2['url']); ?>" alt="<?php echo esc_attr($gallery_img_2['alt']); ?>" />
                                </figure>
                            <?php endif; ?>

                            <!-- Gallery Image 03 -->
                            <?php if( !empty ( $gallery_img_3 ) ) : ?>
                                <figure class="swiper-slide">
                                    <img src="<?php echo esc_url($gallery_img_3['url']); ?>" alt="<?php echo esc_attr($gallery_img_3['alt']); ?>" />
                                </figure>
                            <?php endif; ?>

                            <!-- Gallery Image 04 -->
                            <?php if( !empty ( $gallery_img_4 ) ) : ?>
                                <figure class="swiper-slide">
                                    <img src="<?php echo esc_url($gallery_img_4['url']); ?>" alt="<?php echo esc_attr($gallery_img_4['alt']); ?>" />
                                </figure>
                            <?php endif; ?>   
                            
                            <!-- Gallery Image 05 -->
                            <?php if( !empty ( $gallery_img_5 ) ) : ?>
                                <figure class="swiper-slide">
                                    <img src="<?php echo esc_url($gallery_img_5['url']); ?>" alt="<?php echo esc_attr($gallery_img_5['alt']); ?>" />
                                </figure>
                            <?php endif; ?>
                        </div>                        

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <?php endif; ?>

                    <?php
                        if( $gallery_img == "0" ) {
                            the_excerpt();
                        }
                    ?>
                </div>
                <?php endif; ?> 

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</article>