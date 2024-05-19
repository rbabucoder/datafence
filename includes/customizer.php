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


// Add setting for Footer Menu in Column 1
$wp_customize->add_setting(
    'footer_menu_col1',
    array(
        'default' => '',
        'sanitize_callback' => 'absint',
    )
);

// Add control for Footer Menu in Column 1
$wp_customize->add_control(
    'footer_menu_col1_control',
    array(
        'label' => __('Footer Menu in Column 1', 'datafence'),
        'section' => 'footer_settings',
        'settings' => 'footer_menu_col1',
        'type' => 'select',
        'choices' => datafence_get_all_menus(), // Function to retrieve all available menus
    )
);

// Add setting for Footer Title in Column 1
$wp_customize->add_setting(
    'footer_title_col1',
    array(
        'default' => __('Connect with Us', 'datafence'),
        'sanitize_callback' => 'sanitize_text_field',
    )
);

// Add control for Footer Title in Column 1
$wp_customize->add_control(
    'footer_title_col1_control',
    array(
        'label' => __('Footer Title in Column 1', 'datafence'),
        'section' => 'footer_settings',
        'settings' => 'footer_title_col1',
        'type' => 'text',
    )
);

// Add setting for Footer Menu in Column 2
$wp_customize->add_setting(
    'footer_menu_col2',
    array(
        'default' => '',
        'sanitize_callback' => 'absint',
    )
);

// Add control for Footer Menu in Column 2
$wp_customize->add_control(
    'footer_menu_col2_control',
    array(
        'label' => __('Footer Menu in Column 2', 'datafence'),
        'section' => 'footer_settings',
        'settings' => 'footer_menu_col2',
        'type' => 'select',
        'choices' => datafence_get_all_menus(), // Function to retrieve all available menus
    )
);

// Add setting for Footer Title in Column 2
$wp_customize->add_setting(
    'footer_title_col2',
    array(
        'default' => __('Explore', 'datafence'),
        'sanitize_callback' => 'sanitize_text_field',
    )
);

// Add control for Footer Title in Column 2
$wp_customize->add_control(
    'footer_title_col2_control',
    array(
        'label' => __('Footer Title in Column 2', 'datafence'),
        'section' => 'footer_settings',
        'settings' => 'footer_title_col2',
        'type' => 'text',
    )
);

 // Add setting for Footer Bar Menu
 $wp_customize->add_setting(
    'footer_bar_menu',
    array(
        'default' => '',
        'sanitize_callback' => 'absint',
    )
);

// Add control for Footer Bar Menu
$wp_customize->add_control(
    'footer_bar_menu_control',
    array(
        'label' => __('Footer Bar Menu', 'datafence'),
        'section' => 'footer_settings',
        'settings' => 'footer_bar_menu',
        'type' => 'select',
        'choices' => datafence_get_all_menus(), // Function to retrieve all available menus
    )
);

// Add setting for Footer Bar Content
$wp_customize->add_setting(
    'footer_bar_content',
    array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    )
);

// Add control for Footer Bar Content
$wp_customize->add_control(
    'footer_bar_content_control',
    array(
        'label' => __('Footer Bar Content', 'datafence'),
        'section' => 'footer_settings',
        'settings' => 'footer_bar_content',
        'type' => 'textarea',
    )
);

    /////////////////////////////////////////////////
    


}


add_action('customize_register', 'datafence_customize_register');


// Function to retrieve all available menus
function datafence_get_all_menus() {
    $menus = wp_get_nav_menus();
    $menu_options = array();
    foreach ($menus as $menu) {
        $menu_options[$menu->term_id] = $menu->name;
    }
    return $menu_options;
}