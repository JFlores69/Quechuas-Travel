<section class="testimonials-two">
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle">Review & Testimonial</div>
            <h2><i class="bg-vector"></i><span>Top Reviews for Treker</span></h2>
        </div>
        <!-- Aquí se ejecuta el shortcode -->
        <div class="reviews-content">
            <?php
            if (shortcode_exists('trustindex')) {
                echo do_shortcode('[trustindex no-registration=tripadvisor]');
            } else {
                echo '<p>Trustindex shortcode is not available or the plugin is inactive.</p>';
            }
            ?>
        </div>
    </div>
</section>
