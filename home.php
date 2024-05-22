<?php get_header(); ?>

<div id="content">
    <?php
    // Retrieve ACF fields directly from the "Blogs" page
    $blogs_page_id = get_option('page_for_posts');
    $breadcrumb_title = get_field('breadcrumb_heading', $blogs_page_id);
    $breadcrumb_desc = get_field('breadcrumb_description', $blogs_page_id);
    $breadcrumb_bg_img = get_field('breadcumb_image', $blogs_page_id);
    $enable_disable_breadcrumb = get_field('enable_disable_breadcrumb', $blogs_page_id);
    $home_url = home_url('/');
    $current_page_title = single_post_title('', false);
    $current_page_url = get_permalink();

    // Fallback to current page title if breadcrumb title is not set
    if (!$breadcrumb_title) {
        $breadcrumb_title = $current_page_title;
    }

    // Output breadcrumb if enabled
    if ($enable_disable_breadcrumb): ?>
        <div class="datafence-breadcrumb"
            style="background-image: url('<?php echo esc_url($breadcrumb_bg_img); ?>'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="breadcrumb-container container">
                <h1 class="datafence__title"><?php echo esc_html($breadcrumb_title); ?></h1>
                <?php if ($breadcrumb_desc): ?>
                    <p class="datafence__description">
                        <?php echo esc_html($breadcrumb_desc); ?>
                    </p>
                <?php endif; ?>
                <nav class="datafence__breadcrumb" aria-label="breadcrumb">
                    <a class="datafence__breadcrumb-link" href="<?php echo esc_url($home_url); ?>">Home</a>
                    <i class="datafence__breadcrumb-icon fa-solid fa-arrow-right"></i>
                    <a class="datafence__breadcrumb-link datafence__breadcrumb-link--current"
                        href="<?php echo esc_url($current_page_url); ?>"><?php echo esc_html($current_page_title); ?></a>
                </nav>
            </div>
        </div>
    <?php endif; ?>


    <div class="container">
        <div class="post-list">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()); ?>
                <?php endwhile; ?>
            </div>
            <div class="pagination-container">
                <?php the_posts_pagination(
                    array(
                        'prev_text' => __('Previous', 'textdomain'),
                        'next_text' => __('Next', 'textdomain'),
                    )
                ); ?>
            <?php else: ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>

        </div>
    </div>
</div>
<?php include get_template_directory() . '/includes/sub-form.php'; ?>

<?php get_footer(); ?>