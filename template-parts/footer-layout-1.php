<!-- footer-layout-1.php -->
</div>
<?php
// footer.php

$footer_logo_url = get_theme_mod('footer_logo');
$footer_description = get_theme_mod('footer_description');
$footer_title_col1 = get_theme_mod('footer_title_col1', 'Connect with Us');
$footer_title_col2 = get_theme_mod('footer_title_col2', 'Explore');
$footer_menu_col1_id = get_theme_mod('footer_menu_col1');
$footer_menu_col2_id = get_theme_mod('footer_menu_col2');
$footer_bar_menu_id = get_theme_mod('footer_bar_menu');
$footer_bar_content = get_theme_mod('footer_bar_content');

$footer_menu_col1 = '';
$footer_menu_col2 = '';
$footer_bar_menu = '';

if ($footer_menu_col1_id) {
    $footer_menu_col1 = wp_nav_menu(
        array(
            'menu' => $footer_menu_col1_id,
            'echo' => false,
        )
    );
}

if ($footer_menu_col2_id) {
    $footer_menu_col2 = wp_nav_menu(
        array(
            'menu' => $footer_menu_col2_id,
            'echo' => false,
        )
    );
}

if ($footer_bar_menu_id) {
    $footer_bar_menu = wp_nav_menu(
        array(
            'menu' => $footer_bar_menu_id,
            'echo' => false,
        )
    );
}
?>
<footer id="colophon" class="site-footer footer">
    <div class="footer__container container">
        <div class="footer__logo-section">

            <?php if ($footer_logo_url): ?>
                <img src="<?php echo esc_url($footer_logo_url); ?>" alt="footer-logo" class="footer__logo">
            <?php else: ?>
                <img src="<?php echo IMAGE_DIR; ?>/datafence-logo.svg" alt="footer-logo" class="footer__logo">
            <?php endif; ?>
            <div class="footer__description">
                <?php if ($footer_description): ?>
                    <p><?php echo esc_html($footer_description); ?></p>
                <?php else: ?>
                    <p>Fermentum odio eu feugiat pretiums
                        nibh. Dolor sit consectetur adipiscini
                        over the aenean bcom here.</p>
                <?php endif; ?>
            </div>
            <!-- <ul class="footer__social-links">
                <li class="footer__social-item"><a href="" class="footer__social-link"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li class="footer__social-item"><a href="" class="footer__social-link"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li class="footer__social-item"><a href="" class="footer__social-link"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li class="footer__social-item"><a href="" class="footer__social-link"><i class="fa-brands fa-pinterest-p"></i></a></li>
                <li class="footer__social-item"><a href="" class="footer__social-link"><i class="fa-brands fa-youtube"></i></a></li>
            </ul> -->
            <ul class="footer__social-links">
                <?php
                // Define an array with social platforms and their corresponding icons
                $social_platforms = array(
                    'Facebook' => array(
                        'icon' => 'fa-brands fa-facebook-f',
                        'link' => get_theme_mod('footer_facebook_link'),
                        'image' => get_theme_mod('footer_facebook_image'),
                    ),
                    'Twitter' => array(
                        'icon' => 'fa-brands fa-twitter',
                        'link' => get_theme_mod('footer_twitter_link'),
                        'image' => get_theme_mod('footer_twitter_image'),
                    ),
                    'LinkedIn' => array(
                        'icon' => 'fa-brands fa-linkedin-in',
                        'link' => get_theme_mod('footer_linkedin_link'),
                        'image' => get_theme_mod('footer_linkedin_image'),
                    ),
                    'Pinterest' => array(
                        'icon' => 'fa-brands fa-pinterest-p',
                        'link' => get_theme_mod('footer_pinterest_link'),
                        'image' => get_theme_mod('footer_pinterest_image'),
                    ),
                    'YouTube' => array(
                        'icon' => 'fa-brands fa-youtube',
                        'link' => get_theme_mod('footer_youtube_link'),
                        'image' => get_theme_mod('footer_youtube_image'),
                    ),
                    'Instagram' => array(
                        'icon' => 'fa-brands fa-youtube',
                        'link' => get_theme_mod('footer_instagram_link'),
                        'image' => get_theme_mod('footer_instagram_image'),
                    ),
                );

                // Loop through each social platform
                foreach ($social_platforms as $platform => $data) {
                    // Check if the link for the platform is set
                    if (!empty($data['link'])) {
                        ?>
                        <li class="footer__social-item">
                            <a href="<?php echo esc_url($data['link']); ?>" class="footer__social-link">
                                <!-- <i class="<?php //echo esc_attr($data['icon']); ?>"></i> -->
                                <img src="<?php echo esc_url($data['image']); ?> " alt="social-media">
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>

        </div>
        <div class="footer__company-section">
            <h3 class="footer__title"><?php echo esc_html($footer_title_col1); ?></h3>
            <ul class="footer__list">
                <?php echo $footer_menu_col1; ?>
            </ul>
        </div>
        <!-- <div class="footer__company-section">
            <h3 class="footer__title">Company</h3>
            <ul class="footer__list">
                <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Services</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">FAQ</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Blog Standard</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Contact Us</a></li>
            </ul>
        </div> -->
        <!-- <div class="footer__solutions-section">
            <h3 class="footer__title">Solutions</h3>
            <ul class="footer__list">
                <li class="footer__list-item"><a href="#" class="footer__link">Advanced Analytic</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Business Services</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Consulting Services</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Consumer Product</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Financial Services</a></li>
            </ul>
        </div> -->
        <div class="footer__solutions-section">
            <h3 class="footer__title"><?php echo esc_html($footer_title_col2); ?></h3>
            <ul class="footer__list">
                <?php echo $footer_menu_col2; ?>
            </ul>
        </div>
        <div class="footer__newsletter-section">
            <div class="footer__newsletter-content">
                <h4 class="footer__newsletter-title">Newsletter Subscribe</h4>
                <p class="footer__newsletter-description">You get weekly update on your email-no spam email.</p>
                <?php echo do_shortcode('[contact-form-7 id="b3a3abd" title="Footer Form"]'); ?>
            </div>
        </div>
    </div><!-- .footer__container -->
    </div><!-- .footer__container -->
    <div class="footer__bar">
        <div class="container footer__bar-container">
            <div class="footer__bar-content">
                <?php echo wp_kses_post($footer_bar_content); ?>
            </div>
            <?php if ($footer_bar_menu): ?>
                <ul class="footer__bar-list">
                    <?php echo $footer_bar_menu; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</footer><!-- .footer -->
