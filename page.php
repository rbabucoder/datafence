<?php get_header(); ?>

<div id="content">

    <?php get_template_part('template-parts/breadcrumb'); ?>


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