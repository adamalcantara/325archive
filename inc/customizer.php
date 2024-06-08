<?php 

function guitararchive_customizer( $wp_customize ) {

    // Hero section
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __( 'Hero Section', 'guitararchive' ),
        )
        );
}

?>