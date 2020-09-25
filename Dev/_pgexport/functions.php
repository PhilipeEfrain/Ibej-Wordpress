<?php
if ( ! function_exists( 'site_ibej_setup' ) ) :

function site_ibej_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'site_ibej', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'site_ibej' ),
        'social'  => __( 'Social Links Menu', 'site_ibej' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // site_ibej_setup

add_action( 'after_setup_theme', 'site_ibej_setup' );


if ( ! function_exists( 'site_ibej_init' ) ) :

function site_ibej_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('area_atuacao', array(
        'labels' => 
            array(
                'name' => __( 'Áreas de Atuação', 'site_ibej' ),
                'singular_name' => __( 'Área de Atuação', 'site_ibej' )
            ),
        'public' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-groups'
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // site_ibej_setup

add_action( 'init', 'site_ibej_init' );


if ( ! function_exists( 'site_ibej_custom_image_sizes_names' ) ) :

function site_ibej_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'site_ibej_custom_image_sizes_names' );
endif;// site_ibej_custom_image_sizes_names



if ( ! function_exists( 'site_ibej_widgets_init' ) ) :

function site_ibej_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'site_ibej_widgets_init' );
endif;// site_ibej_widgets_init



if ( ! function_exists( 'site_ibej_customize_register' ) ) :

function site_ibej_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'carousel', array(
        'title' => __( 'Carousel', 'site_ibej' )
    ));

    $wp_customize->add_section( 'sobre', array(
        'title' => __( 'Sobre o Ibej', 'site_ibej' )
    ));

    $wp_customize->add_section( 'c5', array(
        'title' => __( 'Conheça a C5', 'site_ibej' )
    ));

    $wp_customize->add_section( 'vantagens', array(
        'title' => __( 'Vantagens', 'site_ibej' )
    ));

    $wp_customize->add_section( 'logo', array(
        'title' => __( 'Logo', 'site_ibej' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'site_ibej' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'carousel_texto', array(
        'type' => 'theme_mod',
        'default' => __( 'Let\'s Begin', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'carousel_texto', array(
        'label' => __( 'Texto de Chamada', 'site_ibej' ),
        'type' => 'text',
        'section' => 'carousel'
    ));

    $wp_customize->add_setting( 'carousel_texto_02', array(
        'type' => 'theme_mod',
        'default' => __( 'Make designed by as Begindot.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'carousel_texto_02', array(
        'label' => __( 'Texto', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'carousel'
    ));

    $wp_customize->add_setting( 'carousel_btn_nome', array(
        'type' => 'theme_mod',
        'default' => __( 'Learn More', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'carousel_btn_nome', array(
        'label' => __( 'Botão', 'site_ibej' ),
        'type' => 'text',
        'section' => 'carousel'
    ));

    $wp_customize->add_setting( 'carousel_btn_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'carousel_btn_link', array(
        'label' => __( 'Link', 'site_ibej' ),
        'type' => 'url',
        'section' => 'carousel'
    ));

    $wp_customize->add_setting( 'carousel_img01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'carousel_img01', array(
        'label' => __( 'Imagem 01', 'site_ibej' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'carousel'
    ) ) );

    $wp_customize->add_setting( 'carousel_img02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'carousel_img02', array(
        'label' => __( 'Imagem 02', 'site_ibej' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'carousel'
    ) ) );

    $wp_customize->add_setting( 'sobre_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'About Me', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_titulo', array(
        'label' => __( 'Título', 'site_ibej' ),
        'type' => 'text',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'sobre_sub_tag', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat unde non modi, facilis, quae?', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_sub_tag', array(
        'label' => __( 'Subtítulo', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'sobre_imagem', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sobre_imagem', array(
        'label' => __( 'Imagem', 'site_ibej' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'sobre'
    ) ) );

    $wp_customize->add_setting( 'sobre_link_facebook', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_link_facebook', array(
        'label' => __( 'Link do Facebook', 'site_ibej' ),
        'type' => 'url',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'sobre_link_instagram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_link_instagram', array(
        'label' => __( 'Link do Instagram', 'site_ibej' ),
        'type' => 'url',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'sobre_link_youtube', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_link_youtube', array(
        'label' => __( 'Link do youtube', 'site_ibej' ),
        'type' => 'url',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'sobre_segundo_titulo', array(
        'type' => 'theme_mod',
        'default' => 'Hello, I am <span>AL Mamun</span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_segundo_titulo', array(
        'label' => __( 'Segundo Título', 'site_ibej' ),
        'type' => 'text',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'sobre_seg_tag', array(
        'type' => 'theme_mod',
        'default' => __( 'Graphic Designer and Web Designer', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_seg_tag', array(
        'label' => __( 'Destaque', 'site_ibej' ),
        'type' => 'text',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'sobre_testo_pincipal', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis numquam ipsam ut deleniti perferendis aliquid ullam, voluptatibus nam sunt eum laudantium cupiditate iste, obcaecati deserunt dolores aliquam quia cum minus animi ipsa est facere culpa fugiat, maxime quam! Itaque aperiam sequi accusantium impedit recusandae nobis quod sunt deserunt provident omnis.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'sobre_testo_pincipal', array(
        'label' => __( 'Texto Principal', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'sobre'
    ));

    $wp_customize->add_setting( 'c5_sobre_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'About Me', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'c5_sobre_titulo', array(
        'label' => __( 'Título', 'site_ibej' ),
        'type' => 'text',
        'section' => 'c5'
    ));

    $wp_customize->add_setting( 'c5_sub_tag', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat unde non modi, facilis, quae?', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'c5_sub_tag', array(
        'label' => __( 'Subtítulo', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'c5'
    ));

    $wp_customize->add_setting( 'c5_imagem', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'c5_imagem', array(
        'label' => __( 'Imagem', 'site_ibej' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'c5'
    ) ) );

    $wp_customize->add_setting( 'c5_segundo_titulo', array(
        'type' => 'theme_mod',
        'default' => 'Hello, I am <span>AL Mamun</span>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'c5_segundo_titulo', array(
        'label' => __( 'Segundo Título', 'site_ibej' ),
        'type' => 'text',
        'section' => 'c5'
    ));

    $wp_customize->add_setting( 'c5_seg_tag', array(
        'type' => 'theme_mod',
        'default' => __( 'Graphic Designer and Web Designer', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'c5_seg_tag', array(
        'label' => __( 'Destaque', 'site_ibej' ),
        'type' => 'text',
        'section' => 'c5'
    ));

    $wp_customize->add_setting( 'c5_testo_pincipal', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis numquam ipsam ut deleniti perferendis aliquid ullam, voluptatibus nam sunt eum laudantium cupiditate iste, obcaecati deserunt dolores aliquam quia cum minus animi ipsa est facere culpa fugiat, maxime quam! Itaque aperiam sequi accusantium impedit recusandae nobis quod sunt deserunt provident omnis.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'c5_testo_pincipal', array(
        'label' => __( 'Texto Principal', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'c5'
    ));

    $wp_customize->add_setting( 'vantagens_titulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Why choose Me', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagens_titulo', array(
        'label' => __( 'Vantagens Titulo', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagens_subtitulo', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagens_subtitulo', array(
        'label' => __( 'Vatagens Subtitulo', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagens_icone01', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagens_icone01', array(
        'label' => __( 'Icone 01', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_01', array(
        'type' => 'theme_mod',
        'default' => __( 'Completed on right time', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_01', array(
        'label' => __( 'Vantagem 01', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_texto01', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_texto01', array(
        'label' => __( 'Texto 01', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagens_icone03', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagens_icone03', array(
        'label' => __( 'Icone 03', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_03', array(
        'type' => 'theme_mod',
        'default' => __( 'Completed on right time', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_03', array(
        'label' => __( 'Vantagem 03', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_texto03', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_texto03', array(
        'label' => __( 'Texto 03', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagens_icone02', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagens_icone02', array(
        'label' => __( 'Icone 02', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_02', array(
        'type' => 'theme_mod',
        'default' => __( 'Completed on right time', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_02', array(
        'label' => __( 'Vantagem 02', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_texto02', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_texto02', array(
        'label' => __( 'Texto 02', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagens_icone04', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagens_icone04', array(
        'label' => __( 'Icone 04', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_04', array(
        'type' => 'theme_mod',
        'default' => __( 'Completed on right time', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_04', array(
        'label' => __( 'Vantagem 04', 'site_ibej' ),
        'type' => 'text',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'vantagem_texto04', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'vantagem_texto04', array(
        'label' => __( 'Texto 04', 'site_ibej' ),
        'type' => 'textarea',
        'section' => 'vantagens'
    ));

    $wp_customize->add_setting( 'logo_img', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'logo_img', array(
        'label' => __( 'Logo', 'site_ibej' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'logo'
    ) ) );

    $wp_customize->add_setting( 'footer_direitos', array(
        'type' => 'theme_mod',
        'default' => '&copy; 2018 <a href="https://www.begindot.com/">A Template Designed by Begindot</a>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_direitos', array(
        'label' => __( 'Direitos', 'site_ibej' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'site_ibej_customize_register' );
endif;// site_ibej_customize_register


if ( ! function_exists( 'site_ibej_enqueue_scripts' ) ) :
    function site_ibej_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true);

    wp_deregister_script( 'site_ibej-bootstrap' );
    wp_enqueue_script( 'site_ibej-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'site_ibej-lightbox' );
    wp_enqueue_script( 'site_ibej-lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', false, null, true);

    wp_deregister_script( 'site_ibej-owlcarousel' );
    wp_enqueue_script( 'site_ibej-owlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'site_ibej-jquerymixitup' );
    wp_enqueue_script( 'site_ibej-jquerymixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', false, null, true);

    wp_deregister_script( 'site_ibej-wow' );
    wp_enqueue_script( 'site_ibej-wow', get_template_directory_uri() . '/assets/js/wow.min.js', false, null, true);

    wp_deregister_script( 'site_ibej-typed' );
    wp_enqueue_script( 'site_ibej-typed', get_template_directory_uri() . '/assets/js/typed.js', false, null, true);

    wp_deregister_script( 'site_ibej-main' );
    wp_enqueue_script( 'site_ibej-main', get_template_directory_uri() . '/assets/js/main.js', false, null, true);

    wp_deregister_script( 'site_ibej-popper' );
    wp_enqueue_script( 'site_ibej-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', false, null, true);

    wp_deregister_script( 'site_ibej-all' );
    wp_enqueue_script( 'site_ibej-all', 'https://use.fontawesome.com/releases/v5.13.1/js/all.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'site_ibej-style' );
    wp_enqueue_style( 'site_ibej-style', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600', false, null, 'all');

    wp_deregister_style( 'site_ibej-bootstrap' );
    wp_enqueue_style( 'site_ibej-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'site_ibej-fontawesomeall' );
    wp_enqueue_style( 'site_ibej-fontawesomeall', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', false, null, 'all');

    wp_deregister_style( 'site_ibej-lightbox' );
    wp_enqueue_style( 'site_ibej-lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css', false, null, 'all');

    wp_deregister_style( 'site_ibej-owlcarousel' );
    wp_enqueue_style( 'site_ibej-owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false, null, 'all');

    wp_deregister_style( 'site_ibej-animate' );
    wp_enqueue_style( 'site_ibej-animate', get_template_directory_uri() . '/assets/css/animate.css', false, null, 'all');

    wp_deregister_style( 'site_ibej-style-1' );
    wp_enqueue_style( 'site_ibej-style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'site_ibej-responsive' );
    wp_enqueue_style( 'site_ibej-responsive', get_template_directory_uri() . '/assets/css/responsive.css', false, null, 'all');

    wp_deregister_style( 'site_ibej-all' );
    wp_enqueue_style( 'site_ibej-all', 'https://use.fontawesome.com/releases/v5.12.1/css/all.css', false, null, 'all');

    wp_deregister_style( 'site_ibej-fontawesome' );
    wp_enqueue_style( 'site_ibej-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'site_ibej_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>