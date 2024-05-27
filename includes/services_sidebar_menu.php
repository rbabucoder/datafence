<ul class="services_menu_items">
    <?php
    // Create a query to get the "Services" page
    $services_query = new WP_Query(array(
        'post_type' => 'page',
        'title' => 'Services',
        'posts_per_page' => 1
    ));

    if ($services_query->have_posts()) {
        $services_query->the_post();
        $services_page_id = get_the_ID();

        // Query to get all child pages of the "Services" page
        $child_pages_query = new WP_Query(array(
            'post_type' => 'page',
            'post_parent' => $services_page_id,
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ));

        // Include the parent "Services" page in the list
        // echo '<li class="services_menu_item"><a class="services_menu_item_link" href="' . get_permalink($services_page_id) . '">' . get_the_title() . '</a></li>';

        if ($child_pages_query->have_posts()) {
            while ($child_pages_query->have_posts()) {
                $child_pages_query->the_post();
                echo '<li class="services_menu_item"><a class="services_menu_item_link" href="' . get_permalink() . '">' . get_the_title() . ' <i class="fa-solid fa-arrow-right"></i></a></li>';
            }
            wp_reset_postdata();
        }
    } 
    // else {
    //     // Optionally handle the case where the "Services" page is not found
    //     echo '<li class="services_menu_item">No services available.</li>';
    // }

    // Reset the main query
    wp_reset_postdata();
    ?>
</ul>
