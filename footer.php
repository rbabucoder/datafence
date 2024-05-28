<!-- footer.php -->

<?php get_template_part('template-parts/footer-layout-1'); ?>


<!-- <div class="footer-popup-overlay">
    <div class="footer-popup">
        <div class="footer-img">
            <img src="http://local.datafence/wp-content/uploads/2024/05/test.jpg" alt="">
        </div>
        <div class="footer-content-form">
            <i class="fa-solid fa-xmark datafence-close-mark"></i>
            <h2 class="heading">Let’s Schedule a Call!</h2>
            <p class="desc">Please fill this form and someone from our team will
                get in touch on provided mobile & email address.</p>
            <div class="popup-form">
                <?php echo do_shortcode('[contact-form-7 id="7fba0a5" title="Popup Form"]'); ?>
            </div>
        </div>
    </div>
</div> -->


<div class="footer-popup-overlay">
    <div class="footer-popup">
        <div class="footer-img">
            <?php
            $common_image_id = get_theme_mod('common_popup_image');
            if ($common_image_id) {
                $common_image_url = wp_get_attachment_image_url($common_image_id, 'full');
                echo '<img src="' . esc_url($common_image_url) . '" alt="">';
            }
            ?>
        </div>
        <div class="footer-content-form">
            <i class="fa-solid fa-xmark datafence-close-mark"></i>
            <h2 class="heading"><?php echo esc_html(get_theme_mod('common_popup_heading', __('Let’s Schedule a Call!', 'your_theme_textdomain'))); ?></h2>
            <p class="desc"><?php echo esc_html(get_theme_mod('common_popup_desc', __('Please fill this form and someone from our team will get in touch on provided mobile & email address.', 'your_theme_textdomain'))); ?></p>
            <div class="popup-form">
                <?php
                $common_shortcode = get_theme_mod('common_popup_shortcode', '');
                if (!empty($common_shortcode)) {
                    echo do_shortcode($common_shortcode);
                }
                ?>
            </div>
        </div>
    </div>
</div>


<!-- <div class="course-popup-overlay">
    <div class="footer-popup course-popup">
        <div class="footer-img">
            <img src="http://local.datafence/wp-content/uploads/2024/05/course.jpg" alt="">
        </div>
        <div class="footer-content-form">
            <i class="fa-solid fa-xmark datafence-close-mark"></i>
            <h2 class="heading">Course POpup</h2>
            <p class="desc">Please fill this form and someone from our team will
                get in touch on provided mobile & email address.</p>
            <div class="popup-form">
                <?php // echo do_shortcode('[contact-form-7 id="6fc7957" title="Course Popup Form"]'); ?>
            </div>
        </div>
    </div>
</div> -->



<div class="course-popup-overlay">
    <div class="footer-popup course-popup">
        <div class="footer-img">
            <?php
            $image_id = get_theme_mod('course_popup_image');
            if ($image_id) {
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                echo '<img src="' . esc_url($image_url) . '" alt="">';
            }
            ?>
        </div>
        <div class="footer-content-form">
            <i class="fa-solid fa-xmark datafence-close-mark"></i>
            <h2 class="heading">
                <?php echo esc_html(get_theme_mod('course_popup_heading', __('Course Popup', 'your_theme_textdomain'))); ?>
            </h2>
            <p class="desc">
                <?php echo esc_html(get_theme_mod('course_popup_desc', __('Please fill this form and someone from our team will get in touch on provided mobile & email address.', 'your_theme_textdomain'))); ?>
            </p>
            <div class="popup-form">
                <?php
                $shortcode = get_theme_mod('course_popup_shortcode', '');
                if (!empty($shortcode)) {
                    echo do_shortcode($shortcode);
                }
                ?>
            </div>
        </div>
    </div>
</div>




<?php wp_footer(); ?>
</body>

</html>