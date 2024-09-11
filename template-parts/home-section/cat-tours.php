<?php
/*
// Obtener todos los términos en la taxonomía personalizada 'categoria-tours'
$terms = get_terms( array(
    'taxonomy' => 'categoria-tours',
    'hide_empty' => false, // Incluir categorías aunque no tengan publicaciones
) );

// Verificar si se han devuelto términos
if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
    foreach ( $terms as $term ) {
        // Obtener el título, slug y cantidad de publicaciones (quantity)
        $term_title = $term->name;
        $term_slug = $term->slug;
        $term_quantity = $term->count;

        // Obtener el campo personalizado 'miniatura' que has creado con JetEngine
        $term_miniature = get_term_meta( $term->term_id, 'miniatura', true );

        // Depuración: Mostrar el valor exacto de la miniatura
        echo '<pre>';
        echo 'Miniatura para la categoría ' . $term_title . ': ';
        print_r($term_miniature); // Mostrar el valor de la miniatura
        echo '</pre>';

        // Inicializar una variable para almacenar la URL de la miniatura
        $thumbnail_url = '';

        // Verificar si el campo contiene una URL válida
        if ( !empty($term_miniature) && is_string($term_miniature) ) {
            // Si el campo contiene directamente la URL de la imagen
            $thumbnail_url = esc_url($term_miniature);
        }

        // Construir la URL completa para el slug
        $base_url = 'http://localhost/wordpress/categoria-tours/'; // Reemplaza con la URL base de tu sitio
        $category_url = $base_url . $term_slug . '/';

        // Mostrar los datos de la categoría
        echo '<p>Category: ' . $term_title . ' (<a href="' . esc_url($category_url) . '">' . $category_url . '</a>)</p>';
        echo '<p>Quantity (Posts): ' . $term_quantity . '</p>';

        // Mostrar la miniatura si se encuentra
        if (!empty($thumbnail_url)) {
            echo '<p><img src="' . $thumbnail_url . '" alt="' . esc_attr($term_title) . ' thumbnail" style="max-width: 150px;"></p>';
        } else {
            echo '<p>No thumbnail found for this category.</p>';
        }
    }
} else {
    echo 'No se encontraron categorías.';
}*/
?>
<!-- Trending Destinations Section -->
<section class="trending-two">
    <div class="auto-container">
        <div class="title-box">
            <div class="subtitle">Top Destinations</div>
            <h2><i class="bg-vector"></i><span>Trending Destinations</span></h2>
        </div>

        <div id="trendingCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                // Obtener todos los términos en la taxonomía personalizada 'categoria-tours'
                $terms = get_terms( array(
                    'taxonomy' => 'categoria-tours',
                    'hide_empty' => false, // Incluir categorías aunque no tengan publicaciones
                ));

                if (!empty($terms) && !is_wp_error($terms)) {
                    $counter = 0; // Contador para determinar cuándo iniciar un nuevo slide

                    foreach ($terms as $term) {
                        $term_title = $term->name;
                        $term_slug = $term->slug;
                        $term_quantity = $term->count;

                        // Obtener el campo personalizado 'miniatura'
                        $term_miniature = get_term_meta($term->term_id, 'miniatura', true);

                        // Inicializar una variable para almacenar la URL de la miniatura
                        $thumbnail_url = '';

                        // Verificar si el campo contiene una URL válida
                        if (!empty($term_miniature) && is_string($term_miniature)) {
                            $thumbnail_url = esc_url($term_miniature);
                        }

                        // Construir la URL completa para la categoría
                        $base_url = 'http://localhost/wordpress/categoria-tours/';
                        $category_url = $base_url . $term_slug . '/';

                        // Abrir un nuevo slide si es el primero o cada dos bloques
                        if ($counter % 2 == 0) {
                            if ($counter > 0) {
                                echo '</div></div>'; // Cerrar fila y carousel-item
                            }
                            $active_class = ($counter == 0) ? ' active' : '';
                            echo '<div class="carousel-item' . $active_class . '"><div class="row">';
                        }

                        // Mostrar el bloque de categoría con todo el contenedor clicable
                        echo '
                        <div class="col-md-6">
                            <a href="' . esc_url($category_url) . '">
                                <div class="dest-block-two">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <img src="' . esc_url($thumbnail_url) . '" class="d-block w-100" alt="' . esc_attr($term_title) . '"> 
                                        </div>
                                        <div class="hvr-box">
                                            <div class="cap-box">
                                                <div class="cap-inner clearfix">
                                                    <div class="category-title">
                                                        <h3>' . esc_html($term_title) . '</h3>
                                                    </div>
                                                    <div class="tour-count"><span>' . esc_html($term_quantity) . ' Tours</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>';

                        $counter++;
                    }

                    // Cerrar el último slide y fila
                    echo '</div></div>';
                }
                ?>
            </div>

            <!-- Controles del carrusel -->
            <a class="carousel-control-prev" href="#trendingCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#trendingCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
