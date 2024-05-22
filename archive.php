<?php get_header(); ?>

<div id="content">
    <header class="single-post__header breadcrumb-common-header"
        style="background:url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="single-post__title-wrapper">
            <h2 class="single-post__title">
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    the_post();
                    echo 'Author: ' . get_the_author();
                    rewind_posts();
                } elseif (is_year()) {
                    echo 'Year: ' . get_the_date('Y');
                } elseif (is_month()) {
                    echo 'Month: ' . get_the_date('F Y');
                } elseif (is_day()) {
                    echo 'Day: ' . get_the_date('F j, Y');
                } elseif (is_post_type_archive()) {
                    post_type_archive_title();
                } else {
                    echo 'Archive';
                }
                ?>
            </h2>
        </div>
    </header>
    <div class="container">
        <div class="post-list">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
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
