<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content(); // This line is crucial
    endwhile;
endif;
?>

<?php get_footer(); ?>
