<?php 

function guitararchive_customizer( $wp_customize ) {
    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __( 'Copyright Settings', 'guitararchive' ),
            'description' => __( 'Copyright Settings', 'guitararchive' )
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __( 'Copyright X - All Rights Reserved', 'guitararchive'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __( 'Copyright Information', 'guitararchive'),
            'description' => __( 'Please, type your copyright here', 'guitararchive'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    // Disclaimer
    $wp_customize->add_section(
        'sec_disclaimer',
        array(
            'title' => __( 'Disclaimer Settings', 'guitararchive' ),
            'description' => __( 'Disclaimer Settings', 'guitararchive' )
        )
    );

    $wp_customize->add_setting(
        'set_disclaimer',
        array(
            'type' => 'theme_mod',
            'default' => __( 'A disclaimer', 'guitararchive'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_disclaimer',
        array(
            'label' => __( 'Disclaimer Information', 'guitararchive'),
            'description' => __( 'Please, type your disclaimer here', 'guitararchive'),
            'section' => 'sec_disclaimer',
            'type' => 'text'
        )
    );

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

    // Home Blog Posts Section
    $wp_customize->add_section( 
        'sec_blog', 
        array(
		    'title' => 'Blog Section'
	) );
    
    // Posts per page
    $wp_customize->add_setting( 
        'set_per_page', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 
        'set_per_page', 
        array(
            'label' => 'Posts per page',
            'description' => 'How many items to display in the post list?',			
            'section' => 'sec_blog',
            'type' => 'number'
    ) );

    // Post categories to include
    $wp_customize->add_setting( 
        'set_category_include', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 
        'set_category_include', 
        array(
            'label' => 'Post categories to include',
            'description' => 'Comma separated values or single category ID',
            'section' => 'sec_blog',
            'type' => 'text'
    ) );	

    // Post categories to exclude
    $wp_customize->add_setting( 
        'set_category_exclude', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 
        'set_category_exclude', 
        array(
            'label' => 'Post categories to exclude',
            'description' => 'Comma separated values or single category ID',			
            'section' => 'sec_blog',
            'type' => 'text'
    ) );

    // Guitar Template Page
    $wp_customize->add_section(
        'guitar_template',
        array(
            'title' => 'Guitar Template'
        )
    );

    // Pages displayed on Guitar Template Page
    $wp_customize->add_setting(
        'set_per_guitar_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( 
        'set_per_guitar_page', 
        array(
            'label' => 'Posts per page',
            'description' => 'How many items should be displayed on the page?',			
            'section' => 'guitar_template',
            'type' => 'number'
    ) );

    // The array of pages to be displayed on the guitar page
    $wp_customize->add_setting(
        'set_guitar_id_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_guitar_id_include',
        array(
            'label' => 'Page IDs to include',
            'description' => 'Comma separated values or single category ID',
            'section' => 'guitar_template',
            'type' => 'text'
        )
    );

    // Other Guitar Template Page
    $wp_customize->add_section(
        'other_guitar_template',
        array(
            'title' => 'Other Guitar Template'
        )
    );

    // Pages to be displayed on the Other Guitar Template Page
    $wp_customize->add_setting(
        'set_per_other_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( 
        'set_per_other_page', 
        array(
            'label' => 'Posts per page',
            'description' => 'How many items should be displayed on the page?',			
            'section' => 'other_guitar_template',
            'type' => 'number'
    ) );

    // The array of pages to be displayed on the OTHER guitar page
    $wp_customize->add_setting(
        'set_other_guitar_id_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_other_guitar_id_include',
        array(
            'label' => 'Page IDs to include',
            'description' => 'Comma separated values or single category ID',
            'section' => 'other_guitar_template',
            'type' => 'text'
        )
    );
    
}

add_action( 'customize_register', 'guitararchive_customizer' );