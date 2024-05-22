<?php
/**
 * Template Name: Blog Page
 *
 * @package YourThemeName
 */

get_header(); ?>

<div class="container glos">
    <div class="content-area container">
        <main class="site-main" role="main">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', get_post_format() );
                endwhile;

                the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </main><!-- .site-main -->
    </div><!-- .content-area -->

    <?php get_sidebar(); ?>
</div><!-- .container -->

<?php get_footer(); ?>
