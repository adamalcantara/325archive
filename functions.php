<?php 

function guitararchive_load_scripts() {
    // Queue the stylesheet
    wp_enqueue_style( 'guitararchive-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

    // Queue the fonts from Google fonts
    wp_enqueue_style( ' google-fonts', '<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">', array(), null );
}

// Add an action to load the load_scripts function when the page loads
add_action( 'wp_enqueue_scripts', 'guitararchive_load_scripts' );