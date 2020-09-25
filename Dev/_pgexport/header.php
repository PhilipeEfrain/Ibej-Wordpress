<!DOCTYPE html>
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- ====== Google Fonts ====== -->
        <!-- ====== ALL CSS ====== -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>
    <body data-spy="scroll" data-target=".navbar-nav" class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <!-- ====== Header ====== -->
        <header id="header" class="header">
            <!-- ====== Navbar ====== -->
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand logo" href="index.html"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'logo_img', esc_url( get_template_directory_uri() . '/assets/images/proposta_logo_branco.png' ) ), 'large' ) ?>" alt="logo" width="200" height="auto !important"> </a>
                    <!-- // Logo -->
                    <!-- Mobile Menu -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                        <span><i class="fa fa-bars"></i></span>
                    </button>
                    <!-- Mobile Menu -->
                    <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <?php
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}">
                                                                <a class="nav-link" {ATTRS}>{TITLE}</a>
                                                            </li>';
                                PG_Smart_Walker_Nav_Menu::$options['current_class'] = 'active';
                                wp_nav_menu( array(
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '<ul class="%2$s ml-auto navbar-nav" id="%1$s">%3$s</ul>',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            <!-- ====== // Navbar ====== -->
        </header>
        <section>