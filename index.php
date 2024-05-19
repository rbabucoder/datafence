<?php get_header(); ?>

<div id="content">
    <?php
    $breadcrumb_title = get_field('breadcrumb_heading');
    $breadcrumb_desc = get_field('breadcrumb_description');
    $breadcrumb_bg_img = get_field('breadcumb_image');
    $enable_disable_breadcrumb = get_field('enable_disable_breadcrumb');
    $home_url = home_url('/');
    $current_page_title = single_post_title('', false);
    $current_page_url = get_permalink();

    if ($enable_disable_breadcrumb): ?>
        <div class="datafence-breadcrumb"
            style="background-image: url('<?php echo esc_url($breadcrumb_bg_img); ?>'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="breadcrumb-container container">
                <?php if ($breadcrumb_title): ?>
                    <h1 class="datafence__title"><?php echo esc_html($breadcrumb_title); ?></h1>
                <?php endif; ?>
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


    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            // Your loop content here
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
            <?php
        endwhile;
    else:
        ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php
    endif;
    ?>

</div>

<?php get_footer(); ?>