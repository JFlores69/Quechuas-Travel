<header class="main-header header-style-two">
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo">
                        <a href="#" title="Quechuas Travel">
                            <?php
                            if (function_exists('the_custom_logo')) {
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src($custom_logo_id);
                            }
                            ?>
                            <img src="<?php echo $logo[0] ?>" alt="logo" title="Quechuas Travel">
                        </a>
                    </div>
                </div>

                <div class="nav-box clearfix">
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <nav class="main-menu">
                            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'menu_class' => 'navigation clearfix',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    )
                                );
                            } else {
                                echo 'No hay menú asignado a la ubicación "Primary".';
                            }
                            ?>
                        </nav>
                        <!-- Main Menu End-->
                    </div>

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener">
                            <span class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/menu-icon.svg" alt="">
                            </span>
                        </button>
                    </div>

                    <!-- Botón de Reservar -->
                    <div class="reservation-box">
                        <div class="outer-container">
                            <div class="inner-box">
                                <a href="reserva.html" class="reservation-btn">
                                    <span class="icon fa fa-calendar"></span> Reservar Ahora
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Botón de Reservar -->
                </div>
            </div>
        </div>
    </div>
</header>
