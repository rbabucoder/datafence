<!-- Testimonial Post Type -->
<div class="testimonial testimonial__slider">
    <?php
    // Query for testimonials posts
    $args = array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1 // Retrieve all testimonial posts
    );
    $testimonials_query = new WP_Query($args);

    // Check if there are any testimonials posts
    if ($testimonials_query->have_posts()) :
        while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
            // Get the custom fields
            $author_name = get_field('author_name');
            $author_designation = get_field('author_designation');
            // Get the post thumbnail URL
            $author_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

            // Ensure that all necessary fields are available
            if ($author_name && $author_designation && $author_img_url) :
                ?>
                <div class="testimonial__content" style="width: 100%; display: inline-block;">
                    <img class="testimonial__quote-icon" src="<?php echo esc_url(IMAGE_DIR); ?>/quote.svg" alt="quote">
                    <div class="testimonial__text"><?php the_content(); ?></div>
                    <div class="testimonial__author">
                        <img class="testimonial__author-img" src="<?php echo esc_url($author_img_url); ?>" alt="author-img">
                        <div class="testimonial__author-details">
                            <h5 class="testimonial__author-name"><?php echo esc_html($author_name); ?></h5>
                            <p class="testimonial__author-role"><?php echo esc_html($author_designation); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile;
        wp_reset_postdata(); // Reset the global post object
    else : ?>
        <p><?php _e('No testimonials found.', 'text-domain'); ?></p>
    <?php endif; ?>
</div>
