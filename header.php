<!-- header.php -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(array('datafence-global-style', 'page-' . get_post_field('post_name', get_post()))); ?>>
    <?php get_template_part('template-parts/header-layout-1'); ?>
    <div id="content" class="site-content">
