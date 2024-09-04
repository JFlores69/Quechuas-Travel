<?php
function quechuas_travel_theme_support() {
    add_theme_support('title-tag'); // Soporte para etiquetas de título dinámicas
    add_theme_support('custom-logo'); // Soporte para logotipo personalizado
    add_theme_support('post-thumbnails'); // Soporte para imágenes destacadas
}
add_action('after_setup_theme', 'quechuas_travel_theme_support');

function quechuas_travel_menus() {
    $locations = array(
        'primary' => __('Menú principal', 'quechuas_travel'), // Menú principal
        'footer'  => __('Elementos del menú del pie de página', 'quechuas_travel'), // Menú del pie de página
    );
    register_nav_menus($locations); // Registra los menús con WordPress
}
add_action('init', 'quechuas_travel_menus');

function quechuas_travel_register_assets() {
    $version = wp_get_theme()->get('Version');

    // Encolar estilos (CSS) de terceros desde CDN
    wp_enqueue_style('quechuas_travel-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');
    wp_enqueue_style('quechuas_travel-bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');
    wp_enqueue_style('quechuas_travel-font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3');
    wp_enqueue_style('quechuas_travel-jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), '1.12.1');
    wp_enqueue_style('quechuas_travel-owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('quechuas_travel-fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', array(), '3.5.7');
    wp_enqueue_style('quechuas_travel-simple-line-icons-css', 'https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css', array(), '2.5.5');

    // Encolar estilos personalizados (CSS) locales
    wp_enqueue_style('quechuas_travel-custom-animate-css', get_template_directory_uri() . '/assets/css/custom-animate.css', array(), $version);
    wp_enqueue_style('quechuas_travel-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), $version);
    wp_enqueue_style('quechuas_travel-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), $version);

    // Encolar scripts (JavaScript) de terceros desde CDN
    wp_enqueue_script('jquery'); // Encolar jQuery proporcionado por WordPress
    wp_enqueue_script('quechuas_travel-jquery-ui-js', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', array('jquery'), '1.12.1', true);
    wp_enqueue_script('quechuas_travel-popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('quechuas_travel-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
    wp_enqueue_script('quechuas_travel-bxslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', array('jquery'), '4.2.15', true);
    wp_enqueue_script('quechuas_travel-owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('quechuas_travel-wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.1.2', true);
    wp_enqueue_script('quechuas_travel-fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), '3.5.7', true);

    // Encolar script personalizado (JavaScript) local
    wp_enqueue_script('quechuas_travel-custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), $version, true);
}
add_action('wp_enqueue_scripts', 'quechuas_travel_register_assets');
?>
