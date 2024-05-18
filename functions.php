<?php

// functions.php

// Include constants for image file
require_once get_template_directory() . '/constants.php';
require_once get_template_directory() . '/includes/customizer.php';
// require_once get_template_directory() . '/custom-walker-nav-menu.php';




function datafence_theme_setup()
{
    // Add support for custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height' => 100,
            'width' => 300,
            'flex-height' => true,
            'flex-width' => true,
        )
    );
}
add_action('after_setup_theme', 'datafence_theme_setup');



// functions.php

function datafence_register_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'datafence'),
        )
    );
}
add_action('init', 'datafence_register_menus');




function datafence_styles_callback()
{

    wp_enqueue_style(
        'google-fonts', // Handle
        'https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', // Google Fonts URL
        array(), // Dependencies
        null // Version number (set to null or leave empty to prevent caching)
    );
    // Enqueue parent theme stylesheet with version number

    wp_enqueue_style(
        'parent-style', // Handle
        CSS_DIR . '/style.css', // Correct path to your CSS file
        array(), // Dependencies
        ASSET_VERSION, // Version number
        'all' // Media type
    );

    // Enqueue jQuery from the WordPress core
    wp_enqueue_script('jquery');

    // Enqueue your custom JavaScript file
    wp_enqueue_script('main-scripts', JS_DIR . '/main.js', array('jquery'), ASSET_VERSION, true);

    // Enqueue FontAwesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');

    // Enqueue Slick stylesheet
    // wp_enqueue_style('datafence-slick-style', get_template_directory_uri() . '/slick/slick.min.css', array(), ASSET_VERSION, 'all');

    // Enqueue Slick theme stylesheet

    wp_enqueue_style('datafence-slick-main', get_template_directory_uri() . '/slick/slick.css', array(), null);
    wp_enqueue_style('datafence-slick-style', get_template_directory_uri() . '/slick/slick-theme.min.css', array(), null);

    // Enqueue Slick script
    wp_enqueue_script('datafence-slick', get_template_directory_uri() . '/slick/slick.min.js', array(), ASSET_VERSION);
}

add_action('wp_enqueue_scripts', 'datafence_styles_callback');


function custom_mime_types($mimes)
{
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');



function portfolio_callback()
{
    ob_start();
    include ('includes/portfolio.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('portfolio', 'portfolio_callback');



function testimonials_callback()
{
    ob_start();
    include ('includes/testimonials.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('testimonials', 'testimonials_callback');


function datafence_blogs_callback()
{
    ob_start();
    include ('includes/datafence_blogs.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_blogs', 'datafence_blogs_callback');

function datafence_team_callback()
{
    ob_start();
    include ('includes/datafence_team.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_team', 'datafence_team_callback');