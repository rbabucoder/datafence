<?php

// functions.php

function datafence_customize_register($wp_customize)
{
    // Add a section for header actions
    $wp_customize->add_section(
        'header_actions_section',
        array(
            'title' => __('Header Actions', 'datafence'),
            'priority' => 30,
        )
    );

    // Add setting for 'Get A Quote' button text
    $wp_customize->add_setting(
        'quote_button_text',
        array(
            'default' => __('Get A Quote', 'datafence'),
            'transport' => 'refresh',
        )
    );

    // Add control for 'Get A Quote' button text
    $wp_customize->add_control(
        'quote_button_text_control',
        array(
            'label' => __('Quote Button Text', 'datafence'),
            'section' => 'header_actions_section',
            'settings' => 'quote_button_text',
            'type' => 'text',
        )
    );

    // Add setting for contact phone number
    $wp_customize->add_setting(
        'contact_phone_number',
        array(
            'default' => __('+1 (647) 464-9563', 'datafence'),
            'transport' => 'refresh',
        )
    );

    // Add control for contact phone number
    $wp_customize->add_control(
        'contact_phone_number_control',
        array(
            'label' => __('Contact Phone Number', 'datafence'),
            'section' => 'header_actions_section',
            'settings' => 'contact_phone_number',
            'type' => 'text',
        )
    );

    // Add setting for contact availability text
    $wp_customize->add_setting(
        'contact_availability_text',
        array(
            'default' => __('Call Us 24/7', 'datafence'),
            'transport' => 'refresh',
        )
    );

    // Add control for contact availability text
    $wp_customize->add_control(
        'contact_availability_text_control',
        array(
            'label' => __('Contact Availability Text', 'datafence'),
            'section' => 'header_actions_section',
            'settings' => 'contact_availability_text',
            'type' => 'text',
        )
    );

    // Add setting for contact icon image
    $wp_customize->add_setting(
        'contact_icon_image',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    // Add control for contact icon image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'contact_icon_image_control',
            array(
                'label' => __('Contact Icon Image', 'datafence'),
                'section' => 'header_actions_section',
                'settings' => 'contact_icon_image',
            )
        )



    );


    /////////////////////////Footer//////////////////////////////
    // Add section for Footer Settings
    $wp_customize->add_section(
        'footer_settings',
        array(
            'title' => __('Footer Settings', 'datafence'),
            'priority' => 200,
        )
    );

    // Add setting for Footer Logo
    $wp_customize->add_setting(
        'footer_logo',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    // Add control for Footer Logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_logo',
            array(
                'label' => __('Footer Logo', 'datafence'),
                'section' => 'footer_settings',
                'settings' => 'footer_logo',
            )
        )
    );

    // Add setting for Footer Description
    $wp_customize->add_setting(
        'footer_description',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Add control for Footer Description
    $wp_customize->add_control(
        'footer_description',
        array(
            'type' => 'textarea',
            'label' => __('Footer Description', 'datafence'),
            'section' => 'footer_settings',
            'settings' => 'footer_description',
            'description' => __('Enter your footer description here.', 'datafence'),
        )
    );



    // Add setting for Footer Facebook Link
    $wp_customize->add_setting(
        'footer_facebook_link',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    // Add control for Footer Facebook Link
    $wp_customize->add_control(
        'footer_facebook_link_control',
        array(
            'label' => __('Footer Facebook Link', 'datafence'),
            'section' => 'footer_settings',
            'settings' => 'footer_facebook_link',
            'type' => 'text',
        )
    );

    // Add setting for Footer Facebook Image
    $wp_customize->add_setting(
        'footer_facebook_image',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    // Add control for Footer Facebook Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_facebook_image_control',
            array(
                'label' => __('Footer Facebook Image', 'datafence'),
                'section' => 'footer_settings',
                'settings' => 'footer_facebook_image',
            )
        )
    );

    // Add setting for Footer Twitter Link
    $wp_customize->add_setting(
        'footer_twitter_link',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    // Add control for Footer Twitter Link
    $wp_customize->add_control(
        'footer_twitter_link_control',
        array(
            'label' => __('Footer Twitter Link', 'datafence'),
            'section' => 'footer_settings',
            'settings' => 'footer_twitter_link',
            'type' => 'text',
        )
    );

    // Add setting for Footer Twitter Image
    $wp_customize->add_setting(
        'footer_twitter_image',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    // Add control for Footer Twitter Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_twitter_image_control',
            array(
                'label' => __('Footer Twitter Image', 'datafence'),
                'section' => 'footer_settings',
                'settings' => 'footer_twitter_image',
            )
        )
    );

    // Add setting for Footer Instagram Link
    $wp_customize->add_setting(
        'footer_instagram_link',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    // Add control for Footer Instagram Link
    $wp_customize->add_control(
        'footer_instagram_link_control',
        array(
            'label' => __('Footer Instagram Link', 'datafence'),
            'section' => 'footer_settings',
            'settings' => 'footer_instagram_link',
            'type' => 'text',
        )
    );

    // Add setting for Footer Instagram Image
    $wp_customize->add_setting(
        'footer_instagram_image',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    // Add control for Footer Instagram Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_instagram_image_control',
            array(
                'label' => __('Footer Instagram Image', 'datafence'),
                'section' => 'footer_settings',
                'settings' => 'footer_instagram_image',
            )
        )
    );


    // Add setting for Footer Pinterest Link
    $wp_customize->add_setting(
        'footer_pinterest_link',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    // Add control for Footer Pinterest Link
    $wp_customize->add_control(
        'footer_pinterest_link_control',
        array(
            'label' => __('Footer Pinterest Link', 'datafence'),
            'section' => 'footer_settings',
            'settings' => 'footer_pinterest_link',
            'type' => 'text',
        )
    );

    // Add setting for Footer Pinterest Image
    $wp_customize->add_setting(
        'footer_pinterest_image',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    // Add control for Footer Pinterest Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_pinterest_image_control',
            array(
                'label' => __('Footer Pinterest Image', 'datafence'),
                'section' => 'footer_settings',
                'settings' => 'footer_pinterest_image',
            )
        )
    );

    // Add setting for Footer YouTube Link
    $wp_customize->add_setting(
        'footer_youtube_link',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    // Add control for Footer YouTube Link
    $wp_customize->add_control(
        'footer_youtube_link_control',
        array(
            'label' => __('Footer YouTube Link', 'datafence'),
            'section' => 'footer_settings',
            'settings' => 'footer_youtube_link',
            'type' => 'text',
        )
    );

    // Add setting for Footer YouTube Image
    $wp_customize->add_setting(
        'footer_youtube_image',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    // Add control for Footer YouTube Image
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_youtube_image_control',
            array(
                'label' => __('Footer YouTube Image', 'datafence'),
                'section' => 'footer_settings',
                'settings' => 'footer_youtube_image',
            )
        )
    );


    /////////////////////////////////////////////////



}


add_action('customize_register', 'datafence_customize_register');
