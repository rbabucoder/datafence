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

    //////////////////////////////////////////////////
    //////////////// Common popup ///////////////////
    // Add Section for Common Popup
    $wp_customize->add_section(
        'common_popup_section',
        array(
            'title' => __('Common Popup Settings', 'your_theme_textdomain'),
            'priority' => 31,
        )
    );

    // Add Setting for Popup Heading
    $wp_customize->add_setting(
        'common_popup_heading',
        array(
            'default' => __('Let’s Schedule a Call!', 'your_theme_textdomain'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'common_popup_heading',
        array(
            'label' => __('Popup Heading', 'your_theme_textdomain'),
            'section' => 'common_popup_section',
            'type' => 'text',
        )
    );

    // Add Setting for Popup Description
    $wp_customize->add_setting(
        'common_popup_desc',
        array(
            'default' => __('Please fill this form and someone from our team will get in touch on provided mobile & email address.', 'your_theme_textdomain'),
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );
    $wp_customize->add_control(
        'common_popup_desc',
        array(
            'label' => __('Popup Description', 'your_theme_textdomain'),
            'section' => 'common_popup_section',
            'type' => 'textarea',
        )
    );

    // Add Setting for Contact Form 7 Shortcode
    $wp_customize->add_setting(
        'common_popup_shortcode',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'common_popup_shortcode',
        array(
            'label' => __('Contact Form 7 Shortcode', 'your_theme_textdomain'),
            'section' => 'common_popup_section',
            'type' => 'text',
        )
    );

    // Add Setting for Popup Image
    $wp_customize->add_setting(
        'common_popup_image',
        array(
            'default' => '',
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Media_control(
            $wp_customize,
            'common_popup_image',
            array(
                'label' => __('Popup Image', 'your_theme_textdomain'),
                'section' => 'common_popup_section',
                'mime_type' => 'image',
            )
        )
    );
    /////////////////////////////////////////////////

    ////////////////////////////////////////////////
    // popup

    // Add Section for Course Popup
    $wp_customize->add_section(
        'course_popup_section',
        array(
            'title' => __('Course Popup Settings', 'your_theme_textdomain'),
            'priority' => 30,
        )
    );

    // Add Setting for Popup Heading
    $wp_customize->add_setting(
        'course_popup_heading',
        array(
            'default' => __('Course Popup', 'your_theme_textdomain'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'course_popup_heading',
        array(
            'label' => __('Popup Heading', 'your_theme_textdomain'),
            'section' => 'course_popup_section',
            'type' => 'text',
        )
    );

    // Add Setting for Popup Description
    $wp_customize->add_setting(
        'course_popup_desc',
        array(
            'default' => __('Please fill this form and someone from our team will get in touch on provided mobile & email address.', 'your_theme_textdomain'),
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );
    $wp_customize->add_control(
        'course_popup_desc',
        array(
            'label' => __('Popup Description', 'your_theme_textdomain'),
            'section' => 'course_popup_section',
            'type' => 'textarea',
        )
    );

    // Add Setting for Contact Form 7 Shortcode
    $wp_customize->add_setting(
        'course_popup_shortcode',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'course_popup_shortcode',
        array(
            'label' => __('Contact Form 7 Shortcode', 'your_theme_textdomain'),
            'section' => 'course_popup_section',
            'type' => 'text',
        )
    );

    // Add Setting for Popup Image
    $wp_customize->add_setting(
        'course_popup_image',
        array(
            'default' => '',
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'course_popup_image',
            array(
                'label' => __('Popup Image', 'your_theme_textdomain'),
                'section' => 'course_popup_section',
                'mime_type' => 'image',
            )
        )
    );
    /////////////////////////////////////////////////////////


    $wp_customize->add_setting(
        'footer_menu_2',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'footer_menu_2',
        array(
            'label' => __('Select Footer Menu 2', 'theme'),
            'section' => 'footer_settings',
            'type' => 'select',
            'choices' => get_menus_dropdown(),
        )
    );





    $wp_customize->add_setting(
        'footer_menu_3',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'footer_menu_3',
        array(
            'label' => __('Select Footer Menu 3', 'theme'),
            'section' => 'footer_settings',
            'type' => 'select',
            'choices' => get_menus_dropdown(),
        )
    );



    // Add a setting for the first footer title
    $wp_customize->add_setting(
        'footer_title',
        array(
            'default' => __('Company', 'mytheme'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Add a control for the first footer title
    $wp_customize->add_control(
        'footer_title_control',
        array(
            'label' => __('Footer Menu Title 2', 'mytheme'),
            'section' => 'footer_settings',
            'settings' => 'footer_title',
            'type' => 'text',
        )
    );

    // Add a setting for the second footer title
    $wp_customize->add_setting(
        'footer_title_2',
        array(
            'default' => __('Solutions', 'mytheme'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Add a control for the second footer title
    $wp_customize->add_control(
        'footer_title_2_control',
        array(
            'label' => __('Footer Menu Title 3', 'mytheme'),
            'section' => 'footer_settings',
            'settings' => 'footer_title_2',
            'type' => 'text',
        )
    );





    ///////////////////////////////////////////

    // Add a setting for the newsletter title
    $wp_customize->add_setting('footer_newsletter_title', array(
        'default'           => __('Newsletter Subscribe', 'mytheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    // Add a control for the newsletter title
    $wp_customize->add_control('footer_newsletter_title_control', array(
        'label'    => __('Newsletter Title', 'mytheme'),
        'section'  => 'footer_settings',
        'settings' => 'footer_newsletter_title',
        'type'     => 'text',
    ));
    
    // Add a setting for the newsletter description
    $wp_customize->add_setting('footer_newsletter_description', array(
        'default'           => __('You get weekly update on your email-no spam email.', 'mytheme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    // Add a control for the newsletter description
    $wp_customize->add_control('footer_newsletter_description_control', array(
        'label'    => __('Newsletter Description', 'mytheme'),
        'section'  => 'footer_settings',
        'settings' => 'footer_newsletter_description',
        'type'     => 'textarea',
    ));
    ///////////////////////////////////////////////////////
    ///////////////////////////
///footer bar

    $wp_customize->add_section(
        'footer_bar_settings',
        array(
            'title' => __('Footer Bar Settings', 'datafence'),
            'priority' => 200,
        )
    );


    $wp_customize->add_setting(
        'footer_bar_menu',
        array(
            'default' => '',
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'footer_bar_menu',
        array(
            'label' => __('Select Footer Menu 3', 'theme'),
            'section' => 'footer_bar_settings',
            'type' => 'select',
            'choices' => get_menus_dropdown(),
        )
    );



    // Add a setting for the footer text
    $wp_customize->add_setting(
        'footer_text',
        array(
            'default' => __('Default footer text', 'mytheme'),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // Add a control for the footer text
    $wp_customize->add_control(
        'footer_text',
        array(
            'label' => __('Footer Text', 'mytheme'),
            'section' => 'footer_bar_settings',
            'settings' => 'footer_text',
            'type' => 'text',
        )
    );






    

}


function get_menus_dropdown()
{
    $menus = get_terms('nav_menu', array('hide_empty' => true));
    $menu_dropdown = array();
    foreach ($menus as $menu) {
        $menu_dropdown[$menu->term_id] = $menu->name;
    }
    return $menu_dropdown;

}

add_action('customize_register', 'datafence_customize_register');
