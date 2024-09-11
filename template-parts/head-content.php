<header class="main-header header-style-two">
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box d-flex align-items-center justify-content-between">
                <!-- Logo -->
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

                <!-- Navigation -->
                <div class="nav-box d-flex align-items-center">
                    <div class="nav-outer">
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
                    </div>

                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener"><span class="icon"><img src="images/icons/menu-icon.svg" alt=""></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar">
        <div class="hidden-bar-wrapper">
            <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation" viewBox="0 0 16 14"><path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path></svg></span></div>
            <div class="nav-logo-box">
                <div class="logo">
                    <a href="#" title="Quechuas Travel">
                        <img src="<?php echo $logo[0] ?>" alt="logo" title="Quechuas Travel">
                    </a>
                </div>
            </div>

            <!-- Side-menu -->
            <div class="side-menu">
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
            </div>
        </div>
    </section>
</header>
