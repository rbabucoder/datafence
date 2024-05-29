<!-- Team -->
<div class="team team__member_slider">
    <?php
    // Query for team members
    $args = array(
        'post_type' => 'team',
        // 'posts_per_page' => -1 // Retrieve all team member posts
        'posts_per_page' => intval($atts['team_member_to_show']) // Retrieve all team member posts
    );
    $team_query = new WP_Query($args);

    // Check if there are any team member posts
    if ($team_query->have_posts()) :
        while ($team_query->have_posts()) : $team_query->the_post();
            // Get the custom fields
            $team_person_name = get_field('team_person_name');
            $team_person_designation = get_field('team_person_designation');
            // Get the post thumbnail URL
            $team_member_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

            // Ensure all necessary fields are available
            if ($team_person_name && $team_person_designation && $team_member_img_url) :
                ?>
                <div class="team__member">
                    <div class="team__member-image">
                        <img src="<?php echo esc_url($team_member_img_url); ?>" alt="<?php echo esc_attr($team_person_name); ?>">
                    </div>
                    <div class="team__member-info">
                        <h5 class="team__member-name"><?php echo esc_html($team_person_name); ?></h5>
                        <h6 class="team__member-role"><?php echo esc_html($team_person_designation); ?></h6>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile;
        wp_reset_postdata(); // Reset the global post object
    else : ?>
        <p><?php _e('No team members found.', 'text-domain'); ?></p>
    <?php endif; ?>
</div>
