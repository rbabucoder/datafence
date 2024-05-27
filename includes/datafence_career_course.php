<div class="course-post-cards common-course-slider course-custom-slider-arrow">
    <?php
    // Query for the courses post type
    $args = array(
        'post_type' => 'courses',
        'posts_per_page' => -1, // Retrieve all posts
    );
    $courses_query = new WP_Query($args);

    if ($courses_query->have_posts()):
        while ($courses_query->have_posts()):
            $courses_query->the_post();

            $course_title = get_the_title();
            $degree_logo = get_field("discover_college_logo"); // Assuming this is the custom field for the degree logo
            $thumbnail_image = get_field("thumbnail_image"); // Assuming this is the custom field for the thumbnail image
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get featured image URL
            $course_permalink = get_permalink(); // Get the permalink for the course
            ?>
            <div class="course-post-card">
                <div class="course-post-card-container">
                    <div class="course-post-card__header">
                        <?php if ($course_title): ?>
                            <h2 class="course-post-card__title"><?php echo esc_html($course_title); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="course-post-card__image">
                        <?php if ($degree_logo): ?>
                            <img src="<?php echo esc_url($degree_logo); ?>" alt="Degree Logo" class="course-post-card__img">
                        <?php endif; ?>
                    </div>
                    <div class="course-post-card__thumbnail-image">
                        <?php if ($featured_image_url): ?>
                            <img src="<?php echo esc_url($featured_image_url); ?>" alt="Featured Image" class="course-post-card__img">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="course-post-card__footer">
                    <?php if ($course_permalink): ?>
                        <a href="<?php echo esc_url($course_permalink); ?>" class="course-post-card__link">View Program</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p>No courses found.</p>';
    endif;
    ?>
</div>
