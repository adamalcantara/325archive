<?php 

// Get the customizer
require get_template_directory() .'/inc/customizer.php';

function guitararchive_load_scripts() {
    // Queue the stylesheet
    wp_enqueue_style( 'guitararchive-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

    // Queue the fonts from Google fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@100;300;400;500;900&display=swap', array(), null );

    // wp_enqueue_style( ' google-fonts', '')

    // Queue the script
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}

// Add an action to load the load_scripts function when the page loads
add_action( 'wp_enqueue_scripts', 'guitararchive_load_scripts' );


function guitararchive_config() {
    // Register the menus
    register_nav_menus(
        array (
            'guitararchive_main_menu' => 'Main Menu',
            'guitararchive_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'flex-height' => true,
        'height' => 200,
        'flex-width' => true,
        'width' => 3000
    );
    add_theme_support( 'custom-header', $args );
    // Theme support for custom post thumbnails
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));

    // Change the title displayed in the upper tab
    add_theme_support( 'title-tag' );


}

// Call the config function after the theme is loaded
add_action( 'after_setup_theme', 'guitararchive_config', 0);

add_action( 'widgets_init', 'guitararchive_sidebars' );
function guitararchive_sidebars(){
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the sidebar for the blog page.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Mission',
            'id' => 'sidebar-mission',
            'description' => 'This is the mission section of the home page.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

if( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

function guitararchive_custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'guitararchive_custom_excerpt_length', 999 );