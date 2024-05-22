<?php get_header(); ?>
<section class="single-post">
    <div class="single-post__container">
        <header class="single-post__header breadcrumb-common-header"
            style="background:url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="single-post__title-wrapper">
                <h2 class="single-post__title"><?php the_title(); ?></h2>
            </div>
        </header>
        <div class="single-post__content-wrapper container">
            <main class="single-post__main-content">
                <div class="single-post__content">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </main>
            <aside class="single-post__sidebar">
                    <h3 class="single-post__sidebar-heading">Categories</h3>
                <div class="single-post__sidebar-content">
                    <nav class="single-post__nav">
                        <ul class="single-post__list">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                echo '<li class="single-post__list-item"><a class="single-post__link" href="' . get_category_link($category->term_id) . '"><i class="fa-solid fa-circle-arrow-right"></i>  ' . $category->name . '</a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </aside>
        </div>
    </div>
</section>
<?php include get_template_directory() . '/includes/sub-form.php'; ?>
<?php get_footer(); ?>