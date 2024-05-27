<div class="real-people-grid real-people-slider">
    <?php
    // Query for the real-people-stories post type
    $args = array(
        'post_type' => 'real-people-stories',
        'posts_per_page' => -1, // Retrieve all posts
    );
    $real_people_query = new WP_Query($args);

    if ($real_people_query->have_posts()):
        while ($real_people_query->have_posts()):
            $real_people_query->the_post();

            $real_people_Title = get_field("real_people_heading");
            $real_people_desc = get_field("real_people_description");
            $real_peopleSkill1 = get_field("real_people_profile_skills_1");
            $real_peopleSkill2 = get_field("real_people_profile_skills_2");
            $real_people_image = get_field("real_people_image");
            $real_people_link = get_field("real_people_link");
            ?>

            <div class="real-people">
                <div class="real-people__quote">
                    <img class="real-people__quote-icon" src="<?php echo IMAGE_DIR; ?>/double-quote.svg" alt="Quote Icon">
                </div>
                <div class="real-people__title">
                    <?php if ($real_people_Title): ?>
                        <h2 class="real-people__heading"><?php echo esc_html($real_people_Title); ?></h2>
                    <?php endif; ?>
                    <?php if ($real_people_desc): ?>
                        <p class="real-people__desc"><?php echo esc_html($real_people_desc); ?></p>
                    <?php endif; ?>
                </div>
                <div class="real-people__profile">
                    <?php if ($real_people_image): ?>
                        <img class="real-people__profile-image" src="<?php echo esc_url($real_people_image); ?>"
                            alt="<?php echo esc_attr($real_people_Title); ?>">
                    <?php endif; ?>
                </div>
                <?php if ($real_peopleSkill1): ?>
                    <p class="real-people__profile-skill"><?php echo esc_html($real_peopleSkill1); ?></p>
                <?php endif; ?>
                <?php if ($real_peopleSkill2): ?>
                    <p class="real-people__profile-detail"><?php echo esc_html($real_peopleSkill2); ?></p>
                <?php endif; ?>
                <?php if ($real_people_link): ?>
                    <a class="real-people__explore-button" href="<?php echo esc_url($real_people_link); ?>">Explore Courses</a>
                <?php endif; ?>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p>No real people stories found.</p>';
    endif;
    ?>
</div>