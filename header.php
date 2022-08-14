<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RB Free Theme
 * @subpackage RB Blog Two
 * @version RB Blog Two 1.0.0
 * @since RB Blog Two 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--=================================
*************************************
***** Page Wrap Area Start Here *****
*************************************
==================================-->
<div id="page" class="site">

    <!-- skip to content button add -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'skip to content', 'rb-blog-two' ); ?></a>

    <!--==============================
    ===== Header Area Start Here =====
    ===============================-->
    <header>
        <!-- Header Top Area Start Here -->
        <?php get_template_part( 'template-parts/header/header-top' ); ?>

        <!-- Header Site Branding Area Start Here -->
        <?php get_template_part( 'template-parts/header/site-branding' ); ?>

        <!-- Header Menu Area Start Here -->
        <?php get_template_part( 'template-parts/header/header-menu' ); ?>

        <!-- Header Page Banner with Breadcrumbs Area Start Here -->
        <?php get_template_part( 'template-parts/header/breadcrumbs' ); ?>
    </header>
    <!--============================
    ===== Header Area End Here =====
    =============================-->

    <!--=================================================
    ===== Page Content with Sidebar Area Start Here =====
    ==================================================-->
	<div id="content" class="site-content">
		
        <!--===== Page Content Area Start Here =====-->
        <div id="primary" class="content-area">
			
            <!-- Page Blog List Area Start Here -->
            <main id="main" class="site-main">
