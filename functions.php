<?php

// functions.php

// Include constants for image file
require_once get_template_directory() . '/constants.php';
require_once get_template_directory() . '/includes/customizer.php';
// require_once get_template_directory() . '/custom-walker-nav-menu.php';




function datafence_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');

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
            'footer_menu_1' => __('Footer Menu 1'),
            'footer_menu_2' => __('Footer Menu 2'),
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

function datafence_career_course_callback()
{
    ob_start();
    include ('includes/datafence_career_course.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_career_course', 'datafence_career_course_callback');



function datafence_discover_courses_callback()
{
    ob_start();
    include ('includes/datafence_discover_courses.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_discover_courses', 'datafence_discover_courses_callback');


function datafence_real_people_stories_callback()
{
    ob_start();
    include ('includes/datafence_real_people_stories.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_real_people_stories', 'datafence_real_people_stories_callback');

function datafence_course_card_style_2_callback()
{
    ob_start();
    include ('includes/datafence_course_card_style_2.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_course_card_style_2', 'datafence_course_card_style_2_callback');


function datafence_team_callback()
{
    ob_start();
    include ('includes/datafence_team.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_team', 'datafence_team_callback');


function services_sidebar_menu_callback()
{
    ob_start();
    include ('includes/services_sidebar_menu.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('services_sidebar_menu', 'services_sidebar_menu_callback');


function datafence_team2_callback()
{
    ob_start();
    include ('includes/datafence_team2.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode('datafence_team2', 'datafence_team2_callback');

function enqueue_custom_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('load-more-script', JS_DIR . '/load-more.js', array('jquery'), ASSET_VERSION, true);

    // Localize script to pass Ajax URL
    wp_localize_script(
        'load-more-script',
        'ajax_params',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
        )
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



function load_more_team_members()
{
    $paged = $_POST['page'];
    $posts_per_page = 4; // Number of members to load per request
    $args = array(
        'post_type' => 'team',
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();
            ?>
            <div class="team2__member">
                <div class="team2__member-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="team2__member-info">
                    <h5 class="team2__member-name"><?php the_title(); ?></h5>
                    <h6 class="team2__member-role"><?php the_field('role'); ?></h6>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo 0;
    endif;

    wp_die();
}
add_action('wp_ajax_load_more_team_members', 'load_more_team_members');
add_action('wp_ajax_nopriv_load_more_team_members', 'load_more_team_members');
