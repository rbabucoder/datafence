<article id="post-<?php the_ID(); ?>" <?php post_class('post blog-card'); ?>>
    <header class="post-header">
        <?php if (has_post_thumbnail()): ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('full', ['class' => 'thumbnail-image']); ?>
            </div>
        <?php endif; ?>
    </header>
    <div class="post-content">
        <div class="post-meta">
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
                $category_list = '';
                foreach ($categories as $category) {
                    $category_list .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>, ';
                }
                echo '<p class="post-category"><i class="fa-regular fa-bookmark"></i>  ' . rtrim($category_list, ', ') . '</p>';
            }
            ?>
            <ul class="post-meta-list">
                <li><i class="fa-solid fa-clock"></i> <?php echo esc_html(get_the_date('d, M, Y')); ?></li>
                <li><i class="fa-solid fa-user"></i> <?php echo esc_html(get_the_author()); ?></li>
            </ul>
        </div>
        <hr class="post-divider">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <a href="<?php echo esc_url(get_permalink()); ?>" class="post-read-more">Read More</a>
    </div>
</article>