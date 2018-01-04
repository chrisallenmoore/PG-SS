<?php
if ( ! function_exists( 'spanishschoolhouse_setup' ) ) :

function spanishschoolhouse_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'spanishschoolhouse', get_template_directory() . '/languages' );
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
        'primary' => __( 'Primary Menu', 'spanishschoolhouse' ),
        'social'  => __( 'Social Links Menu', 'spanishschoolhouse' ),
    ) );

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
}
endif; // spanishschoolhouse_setup

add_action( 'after_setup_theme', 'spanishschoolhouse_setup' );


if ( ! function_exists( 'spanishschoolhouse_init' ) ) :

function spanishschoolhouse_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // spanishschoolhouse_setup

add_action( 'init', 'spanishschoolhouse_init' );


if ( ! function_exists( 'spanishschoolhouse_widgets_init' ) ) :

function spanishschoolhouse_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'spanishschoolhouse_widgets_init' );
endif;// spanishschoolhouse_widgets_init



if ( ! function_exists( 'spanishschoolhouse_customize_register' ) ) :

function spanishschoolhouse_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'text_rotator_settings', array(
        'title' => __( 'Text Rotator Settings', 'spanishschoolhouse' )
    ));

    $wp_customize->add_setting( 'text_for_rotator', array(
        'type' => 'theme_mod',
        'default' => '<span>this</span>,<span>and that</span>'
    ));

    $wp_customize->add_control( 'text_for_rotator', array(
        'label' => __( 'HTML for text rotator', 'spanishschoolhouse' ),
        'description' => __( 'separate items by comma *only use commas to separate items* example: &#x3C;span&#x3E;this&#x3C;/span&#x3E;,&#x3C;span&#x3E;that&#x3C;/span&#x3E;', 'spanishschoolhouse' ),
        'type' => 'textarea',
        'section' => 'text_rotator_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'text rotator html'
            )
    ));

    $wp_customize->add_section( 'text_rotator_settings', array(
        'title' => __( 'Text Rotator Settings', 'spanishschoolhouse' )
    ));

    $wp_customize->add_setting( 'text_for_rotator', array(
        'type' => 'theme_mod',
        'default' => '<span>this</span>,<span>and that</span>'
    ));

    $wp_customize->add_control( 'text_for_rotator', array(
        'label' => __( 'HTML for text rotator', 'spanishschoolhouse' ),
        'description' => __( 'separate items by comma *only use commas to separate items* example: &#x3C;span&#x3E;this&#x3C;/span&#x3E;,&#x3C;span&#x3E;that&#x3C;/span&#x3E;', 'spanishschoolhouse' ),
        'type' => 'textarea',
        'section' => 'text_rotator_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'text rotator html'
            )
    ));

    $wp_customize->add_section( 'text_rotator_settings', array(
        'title' => __( 'Text Rotator Settings', 'spanishschoolhouse' )
    ));

    $wp_customize->add_setting( 'text_for_rotator', array(
        'type' => 'theme_mod',
        'default' => '<span>this</span>,<span>and that</span>'
    ));

    $wp_customize->add_control( 'text_for_rotator', array(
        'label' => __( 'HTML for text rotator', 'spanishschoolhouse' ),
        'description' => __( 'separate items by comma *only use commas to separate items* example: &#x3C;span&#x3E;this&#x3C;/span&#x3E;,&#x3C;span&#x3E;that&#x3C;/span&#x3E;', 'spanishschoolhouse' ),
        'type' => 'textarea',
        'section' => 'text_rotator_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'text rotator html'
            )
    ));

    $wp_customize->add_section( 'text_rotator_settings', array(
        'title' => __( 'Text Rotator Settings', 'spanishschoolhouse' )
    ));

    $wp_customize->add_setting( 'text_for_rotator', array(
        'type' => 'theme_mod',
        'default' => '<span>this</span>,<span>and that</span>'
    ));

    $wp_customize->add_control( 'text_for_rotator', array(
        'label' => __( 'HTML for text rotator', 'spanishschoolhouse' ),
        'description' => __( 'separate items by comma *only use commas to separate items* example: &#x3C;span&#x3E;this&#x3C;/span&#x3E;,&#x3C;span&#x3E;that&#x3C;/span&#x3E;', 'spanishschoolhouse' ),
        'type' => 'textarea',
        'section' => 'text_rotator_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'text rotator html'
            )
    ));

    $wp_customize->add_section( 'text_rotator_settings', array(
        'title' => __( 'Text Rotator Settings', 'spanishschoolhouse' )
    ));

    $wp_customize->add_setting( 'text_for_rotator', array(
        'type' => 'theme_mod',
        'default' => '<span>this</span>,<span>and that</span>'
    ));

    $wp_customize->add_control( 'text_for_rotator', array(
        'label' => __( 'HTML for text rotator', 'spanishschoolhouse' ),
        'description' => __( 'separate items by comma *only use commas to separate items* example: &#x3C;span&#x3E;this&#x3C;/span&#x3E;,&#x3C;span&#x3E;that&#x3C;/span&#x3E;', 'spanishschoolhouse' ),
        'type' => 'textarea',
        'section' => 'text_rotator_settings',
        'input_attrs' => 
            array(
                'placeholder' => 'text rotator html'
            )
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'spanishschoolhouse_customize_register' );
endif;// spanishschoolhouse_customize_register


if ( ! function_exists( 'spanishschoolhouse_enqueue_scripts' ) ) :
    function spanishschoolhouse_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js' );
    wp_enqueue_script( 'popper' );

    wp_register_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js' );
    wp_enqueue_script( 'ieviewportbugworkaround' );

    wp_register_script( 'morphext', get_template_directory_uri() . '/Morphext-2.4.4/dist/morphext.min.js' );
    wp_enqueue_script( 'morphext' );

    wp_register_script( 'theme', get_template_directory_uri() . '/assets/js/theme.js' );
    wp_enqueue_script( 'theme' );

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js' );
    wp_enqueue_script( 'bootstrap' );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', null, null, 'all' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'theme', get_template_directory_uri() . '/styles/theme.css', null, null, 'all' );
    wp_enqueue_style( 'theme' );

    wp_register_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', null, null, 'all' );
    wp_enqueue_style( 'fontawesome' );

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'spanishschoolhouse_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>