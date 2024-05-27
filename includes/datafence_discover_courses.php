<!-- Discover Courses grid -->

<div class="discover-courses discover-course-slider common-course-slider course-custom-slider-arrow">
    <?php
    // Query for the discover-courses post type
    $args = array(
        'post_type' => 'courses',
        'posts_per_page' => -1, // Retrieve all posts
    );
    $discover_courses_query = new WP_Query($args);

    if ($discover_courses_query->have_posts()):
        while ($discover_courses_query->have_posts()):
            $discover_courses_query->the_post();

            $discover_univ_name = get_field("discover_university_name");
            $discover_degree_name = get_field("discover_degree_name");
            $discover_course_time = get_field("discover_course_time");
            $discover_scholars_name = get_field("discover_scholars_name");
            $discover_course_link = get_permalink(); // Use permalink for the course link
            $discover_college_logo = get_field("discover_college_logo");
            $discover_thumbnail_text = get_field("discover_thumbnail_text");
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get featured image URL
            ?>
            <div class="course">
                <div class="course__image"
                    style="background: url('<?php echo esc_url($featured_image_url); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
                    <div class="course__image-content">
                        <!-- small img -->
                        <?php if ($discover_college_logo): ?>
                            <div class="course__small-img-container">
                                <img class="course__small-img" src="<?php echo esc_url($discover_college_logo); ?>" alt="">
                            </div>
                        <?php endif; ?>
                        <?php if ($discover_thumbnail_text): ?>
                            <div class="course__categories">
                                <!-- Categories -->
                                <p class="course__category-text"><?php echo esc_html($discover_thumbnail_text); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="course__content">
                    <div class="course__title">
                        <?php if ($discover_univ_name): ?>
                            <h3 class="course__university"><?php echo esc_html($discover_univ_name); ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="course__details">
                        <?php if (get_the_title()): ?>
                            <h2 class="course__program-name"><?php echo esc_html(get_the_title()); ?></h2>
                        <?php endif; ?>

                        <ul class="course__features">
                            <?php if ($discover_degree_name): ?>
                                <li class="course__feature-item">
                                    <img class="course__feature-icon" src="<?php echo IMAGE_DIR; ?>/certificate.svg"
                                        alt="certificate">
                                    <span class="course__feature-text"><?php echo esc_html($discover_degree_name); ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if ($discover_course_time): ?>
                                <li class="course__feature-item">
                                    <img class="course__feature-icon" src="<?php echo IMAGE_DIR; ?>/calender.svg" alt="calendar">
                                    <span class="course__feature-text"><?php echo esc_html($discover_course_time); ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if ($discover_scholars_name): ?>
                                <li class="course__feature-item">
                                    <img class="course__feature-icon" src="<?php echo IMAGE_DIR; ?>/star.svg" alt="star">
                                    <span class="course__feature-text"><?php echo esc_html($discover_scholars_name); ?></span>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <?php if ($discover_course_link): ?>
                            <a class="course__link" href="<?php echo esc_url($discover_course_link); ?>" target="_blank">View Program</a>
                        <?php endif; ?>
                    </div>
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