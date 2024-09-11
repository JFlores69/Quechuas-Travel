<section class="news-section style-two">
    <div class="floated-icon left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/stones-left.svg" alt="" title=""></div>
    <div class="floated-icon right"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/stones-alt.svg" alt="" title=""></div>
    <div class="bg-layer" style="background-image: url(/assets/images/resource/image-1.jpg);"></div>
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle">Treker Top News</div>
            <h2><i class="bg-vector"></i><span>Treker Latest News</span></h2>
        </div>
        <div class="content-box">
            <div class="row clearfix">

                <?php
                // Query para obtener los dos últimos posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2, // Obtener los dos últimos posts
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    $counter = 1;
                    while ($query->have_posts()) : $query->the_post();
                        if ($counter == 1) {
                            // Bloque dinámico 1 (última publicación)
                ?>
                            <!-- Bloque 1 - Última publicación -->
                            <div class="news-block-one no-image col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="info">
                                            <span class="i-block">By : <?php the_author(); ?></span> &ensp; | &ensp; <span class="i-block"><?php echo get_the_date(); ?></span>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="text"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                        $counter++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

                <!-- Bloque Manual 2 con Imagen Específica -->
                <div class="news-block-one alternate col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image">
                                <a href="blog-single.html">
                                    <img src="http://localhost/wordpress/wp-content/uploads/2024/09/img-new.jpg" alt="Descripción de la imagen personalizada" style="width: 370px; height: 274px;">
                                </a>
                            </div>
                            <div class="play-link">
                                <a href="blog-single.html"><span class="icon far fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                // Segunda query para obtener la penúltima publicación
                $counter = 1;
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        if ($counter == 2) {
                            // Bloque dinámico 3 (penúltima publicación)
                ?>
                            <!-- Bloque 3 - Penúltima publicación -->
                            <div class="news-block-one no-image col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="info">
                                            <span class="i-block">By : <?php the_author(); ?></span> &ensp; | &ensp; <span class="i-block"><?php echo get_the_date(); ?></span>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="text"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                        $counter++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
