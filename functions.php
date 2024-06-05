<?php 

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
        'width' => 3000,
    );
    add_theme_support( 'custom-header', $args );

}

// Call the config function after the theme is loaded
add_action( 'after_setup_theme', 'guitararchive_config', 0);