<?php
// Argumentos para la consulta de posts
$args = array(
    'post_type' => 'tours',  // Cambia 'tours' por el slug de tu post type
    'posts_per_page' => 9    // Limitar a 9 productos para mostrar en la página en 3 columnas
);

// Consulta personalizada
$tour_query = new WP_Query($args);

// Verificamos si hay posts
if ($tour_query->have_posts()) {
    ?>
    <!--Products Section-->
    <section class="products-section">
        <div class="auto-container">
            <div class="title-box centered">
                <div class="subtitle">Shop Now</div>
                <h2><i class="bg-vector"></i><span>Featured Trekking Products</span></h2>
            </div>

            <div class="row clearfix">
                <?php
                // Iniciamos el loop para mostrar los productos
                while ($tour_query->have_posts()) {
                    $tour_query->the_post();
                    
                    // Obtener el ID del post actual
                    $post_id = get_the_ID();

                    // Obtener los datos del tour
                    $precio = get_post_meta($post_id, 'precio', true);
                    $resumen = get_the_excerpt(); // Resumen del tour
                    $galeria = get_post_meta($post_id, 'galeria', true); // Galería

                    // Extraer la primera imagen de la galería
                    $imagen_principal = '';
                    if (!empty($galeria)) {
                        // Si la galería es una cadena, dividirla en URLs
                        if (is_array($galeria)) {
                            $galeria_urls = explode(',', $galeria[0]);
                        } else {
                            $galeria_urls = explode(',', $galeria);
                        }
                        // Tomamos la primera imagen
                        $imagen_principal = isset($galeria_urls[0]) ? esc_url(trim($galeria_urls[0])) : 'path/to/default-image.jpg';
                    }

                    // Obtener el título del tour y el enlace
                    $post_title = get_the_title();
                    $post_permalink = get_permalink();

                    // Mostrar el bloque de producto dinámicamente
                    ?>
                    <!--Block-->
                    <div class="col-lg-4 col-md-6 col-sm-12"> <!-- Aquí aseguramos 3 columnas -->
                        <div class="trek-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="<?php echo esc_url($post_permalink); ?>">
                                            <img src="<?php echo esc_url($imagen_principal); ?>" alt="<?php echo esc_attr($post_title); ?>" title="<?php echo esc_attr($post_title); ?>">
                                        </a>
                                    </div>
                                    <div class="price"><span>$<?php echo esc_html($precio); ?></span></div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="<?php echo esc_url($post_permalink); ?>"><?php echo esc_html($post_title); ?></a></h4>
                                    <div class="text"><?php echo esc_html($resumen); ?></div>
                                </div>
                                <div class="bottom-box clearfix">
                                    <div class="more-link">
                                        <a href="<?php echo esc_url($post_permalink); ?>" class="theme-btn">
                                            <span>View Details <i class="icon"><img src="images/icons/logo-icon.svg" alt=""></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                } // Cierra el loop
                ?>
            </div> <!-- Fin del row -->
        </div>
    </section>
    <?php
} else {
    // Mensaje si no hay tours
    echo '<p>No se encontraron tours disponibles.</p>';
}

// Restaurar el post original
wp_reset_postdata();
?>
