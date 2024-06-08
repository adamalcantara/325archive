<?php 

function guitararchive_customizer( $wp_customize ) {

    // Hero section
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => __( 'Hero Section', 'guitararchive' ),
        )
        );
    
    // Hero title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Please add a title', 'guitararchive' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => __( 'Hero title', 'guitararchive' ),
            'description' => __( 'Please add a title here', 'guitararchive' ),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // Hero subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Please add a subtitle', 'guitararchive' ),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => __( 'Hero Subtitle', 'guitararchive' ),
            'description' => __( 'Please add a subtitle here', 'guitararchive' ),
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );

    // Hero Button
    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Learn More', 'guitararchive' ),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => __( 'Hero button text', 'guitararchive' ),
            'description' => __( 'Please add your hero button text here', 'guitararchive' ),
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => __( 'Hero button link', 'guitararchive' ),
            'description' => __( 'Please add your hero button link here', 'guitararchive' ),
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    // Hero height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => __( 'Hero height', 'guitararchive' ),
            'description' => __( 'Please add your hero height here', 'guitararchive' ),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // Hero Background
    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize, 'set_hero_background',
        array(
            'label' => __( 'Hero Image', 'guitararchive' ),
            'section' => 'sec_hero',
            'mime_type' => 'image'
        ))
    );
    
}

add_action( 'customize_register', 'guitararchive_customizer' );