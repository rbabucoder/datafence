<!-- footer-layout-1.php -->
</div>
<?php
// footer.php

$footer_logo_url = get_theme_mod('footer_logo');
$footer_description = get_theme_mod('footer_description');

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
            <ul class="footer__social-links">
                <li class="footer__social-item"><a href="" class="footer__social-link"></a></li>
            </ul>
        </div>
        <div class="footer__company-section">
            <h3 class="footer__title">Company</h3>
            <ul class="footer__list">
                <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Services</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">FAQ</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Blog Standard</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer__solutions-section">
            <h3 class="footer__title">Solutions</h3>
            <ul class="footer__list">
                <li class="footer__list-item"><a href="#" class="footer__link">Advanced Analytic</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Business Services</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Consulting Services</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Consumer Product</a></li>
                <li class="footer__list-item"><a href="#" class="footer__link">Financial Services</a></li>
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
    <div class="footer__bar">
        <div class="container footer__bar-container">
            <p class="footer__bar-text">&copy; Datafence</p>
            <ul class="footer__bar-list">
                <li class="footer__bar-item"><a href="#" class="footer__bar-link">About</a></li>
                <li class="footer__bar-item"><a href="#" class="footer__bar-link">FAQ</a></li>
                <li class="footer__bar-item"><a href="#" class="footer__bar-link">Blog Standard</a></li>
                <li class="footer__bar-item"><a href="#" class="footer__bar-link">Contact</a></li>
            </ul>
        </div>
    </div>
</footer><!-- .footer -->