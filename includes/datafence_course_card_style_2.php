<div class="masterclass-grid course_card_2 course-custom-slider-arrow">

    <?php
    // Query for the masterclasses post type
    $args = array(
        'post_type' => 'masterclasses',
        'posts_per_page' => -1, // Retrieve all posts
    );
    $masterclasses_query = new WP_Query($args);

    if ($masterclasses_query->have_posts()) :
        while ($masterclasses_query->have_posts()) : $masterclasses_query->the_post();

            $masterclass_date = get_field("masterclasses_date");
            $masterclass_time = get_field("masterclasses_time");
            $masterclass_role = get_field("masterclass_role");
            $masterclass_designation = get_field("master_designation");
            $masterclass_teacher_image = get_field("masterclass_teacher_image");
            $masterclass_teacher_name = get_field("masterclass_teacher_name");
            $masterclass_link = get_field("master_lecture_link");
            $masterclass_cat = get_field("masterclass_categories");
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get featured image URL
            
    ?>

    <div class="masterclass">
        <div class="masterclass__info" style="background: url('<?php echo esc_url($featured_image_url); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <?php if ($masterclass_teacher_image) : ?>
                <div class="masterclass__image-wrapper">
                    <img src="<?php echo esc_url($masterclass_teacher_image); ?>" alt="" class="masterclass__image">
                </div>
            <?php endif; ?>
            <div class="masterclass__image-content">
                <?php if ($masterclass_role) : ?>
                    <p class="masterclass__role"><?php echo esc_html($masterclass_role); ?></p>
                <?php endif; ?>
                <?php if ($masterclass_teacher_name) : ?>
                    <h2 class="masterclass__name"><?php echo esc_html($masterclass_teacher_name); ?></h2>
                <?php endif; ?>
                <?php if ($masterclass_designation) : ?>
                    <h3 class="masterclass__title"><?php echo esc_html($masterclass_designation); ?></h3>
                <?php endif; ?>
                <?php if ($masterclass_cat) : ?>
                    <p class="masterclass__categories">Categories: <?php echo esc_html($masterclass_cat); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="masterclass__details">
            <h2 class="masterclass__topic"><?php the_title(); ?></h2>
            <div class="masterclass__schedule">
                <?php if ($masterclass_date) : ?>
                    <p class="masterclass__date"><img class="course__feature-icon" src="<?php echo IMAGE_DIR; ?>/calender.svg" alt="calendar">
                        <span><?php echo esc_html($masterclass_date); ?></span>
                    </p>
                <?php endif; ?>
                <?php if ($masterclass_time) : ?>
                    <p class="masterclass__time"><img class="course__feature-icon" src="<?php echo IMAGE_DIR; ?>/clock.svg" alt="clock">
                        <span><?php echo esc_html($masterclass_time); ?></span>
                    </p>
                <?php endif; ?>
            </div>
            <?php if ($masterclass_link) : ?>
                <a href="<?php echo esc_url($masterclass_link); ?>" class="masterclass__register" target="_blank">Register</a>
            <?php endif; ?>
        </div>
    </div>

    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No masterclasses found.</p>';
    endif;
    ?>

</div>
