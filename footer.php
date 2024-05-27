<!-- footer.php -->

<?php get_template_part('template-parts/footer-layout-1'); ?>


<div class="footer-popup-overlay">
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
</div>



<?php wp_footer(); ?>
</body>

</html>