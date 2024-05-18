<!-- Datafence Blogs Grid -->
<div class="blog-grid">
    <?php
    // Query for the latest 3 blog posts
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3, // Retrieve the latest 3 posts
    );
    $blog_query = new WP_Query($args);

    // Check if there are any blog posts
    if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
            // Get post data
            $post_id = get_the_ID();
            $post_title = get_the_title();
            $post_permalink = get_permalink();
            $post_date = get_the_date('M d, Y');
            $post_author = get_the_author();
            $post_thumbnail = get_the_post_thumbnail_url($post_id, 'full');
            $post_categories = get_the_category();
            $category_name = !empty($post_categories) ? esc_html($post_categories[0]->name) : '';
            ?>
            <div class="blog-grid__item">
                <div class="blog-post">
                    <div class="blog-post__header">
                        <div class="blog-post__meta">
                            <span class="blog-post__meta-date"><?php echo esc_html($post_date); ?></span>
                            <span class="blog-post__meta-author"><?php echo esc_html($post_author); ?></span>
                        </div>
                        <h3 class="blog-post__title">
                            <a href="<?php echo esc_url($post_permalink); ?>" class="blog-post__title-link"><?php echo esc_html($post_title); ?></a>
                        </h3>
                    </div>
                    <div class="blog-post__body">
                        <a href="<?php echo esc_url($post_permalink); ?>" class="blog-post__link">
                            <img src="<?php echo esc_url($post_thumbnail); ?>" alt="<?php echo esc_attr($post_title); ?>" class="blog-post__image">
                        </a>
                        <?php if ($category_name) : ?>
                            <a href="<?php echo esc_url(get_category_link($post_categories[0]->term_id)); ?>" class="blog-post__category">
                                <p class="blog-post__category-name"><i class="fa-regular fa-bookmark"></i> <?php echo $category_name; ?></p>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); // Reset the global post object
    else : ?>
        <p><?php _e('No blog posts found.', 'text-domain'); ?></p>
    <?php endif; ?>
</div>
