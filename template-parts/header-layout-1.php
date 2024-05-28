<header class="header">
    <div class="header__container container">
        <div class="header__branding site-branding">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <img class="header__logo" src="<?php echo IMAGE_DIR; ?>/datafence-logo.svg" alt="data-fence-logo">
            <?php endif; ?>
        </div><!-- .site-branding -->
        <div class="container datafence-menu-burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <nav class="header__navigation main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'main-navigation__list',
                    'fallback_cb' => false,
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'depth' => 3, // Set the depth to 3 to support submenus of submenus
                    'walker' => new DataFence_Walker_Nav_Menu(), // Use the custom walker
                )
            );
            ?>
            <?php
class DataFence_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $submenu_class = ($depth > 0) ? ' sub-menu' : ''; // Add a class for submenu of submenu
        $output .= "\n$indent<ul class=\"submenu$submenu_class\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'main-navigation__item';

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li' . $class_names .'>';

        $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
?>
        </nav><!-- .main-navigation -->
        <div class="header__actions">
            <button
                class="header__quote-button common-button"><?php echo get_theme_mod('quote_button_text', __('Get A Quote', 'datafence')); ?></button>
            <div class="header__contact-info">
                <?php
                $contact_icon_image = get_theme_mod('contact_icon_image', '');
                if ($contact_icon_image) {
                    $contact_icon_image_url = esc_url($contact_icon_image);
                } else {
                    $contact_icon_image_url = IMAGE_DIR . '/call.svg';
                }
                ?>
                <img class="header__call-icon" src="<?php echo $contact_icon_image_url; ?>" alt="Call Icon">
                <div class="header__call-info">
                    <p class="header__call-text">
                        <?php echo get_theme_mod('contact_availability_text', __('Call Us 24/7', 'datafence')); ?></p>
                    <p class="header__call-number">
                        <b><?php echo get_theme_mod('contact_phone_number', __('+1 (647) 464-9563', 'datafence')); ?></b>
                    </p>
                </div><!-- .header__call-info -->
            </div><!-- .header__contact-info -->
        </div><!-- .header__actions -->
    </div><!-- .container -->
</header><!-- .header -->


