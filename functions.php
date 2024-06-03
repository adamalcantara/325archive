<?php 

function guitararchive_load_scripts() {
    // Queue the stylesheet
    wp_enqueue_style( 'guitararchive-style', get_stylesheet_uri(), array(), '1.0', 'all' );
}

// Add an action to load the load_scripts function when the page loads
add_action( 'wp_enqueue_scripts', 'guitararchive_load_scripts' );