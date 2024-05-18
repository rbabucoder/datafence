<!-- Portfolio Post Type -->
<div class="portfolio portfolio_slider">
    <?php
    // Query for portfolio posts
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1 // Retrieve all portfolio posts
    );
    $portfolio_query = new WP_Query($args);

    // Check if there are any portfolio posts
    if ($portfolio_query->have_posts()) :
        while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            // Get the post thumbnail URL
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="portfolio__item-thumbnail portfolio__item" style="background: url('<?php echo esc_url($thumbnail_url); ?>')">
                <!-- <a href="<?php  // the_permalink(); ?>" class="portfolio__link"> -->
                    <h3 class="portfolio__item-title"><?php the_title(); ?></h3>
                <!-- </a> -->
            </div>
        <?php endwhile;
        wp_reset_postdata(); // Reset the global post object
    else : ?>
        <p><?php _e('No portfolio items found.', 'text-domain'); ?></p>
    <?php endif; ?>
</div>
