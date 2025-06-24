<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="header-info">
                    <ul>
                        <?php if (get_theme_mod('pixis_header_address')) : ?>
                            <li><i class="bi bi-geo-alt-fill"></i>
                                <?php echo esc_html(get_theme_mod('pixis_header_address')); ?>
                            </li>
                        <?php endif; ?>

                        <?php if (get_theme_mod('pixis_header_email')) : ?>
                            <li class="exam-gmail"><i class="bi bi-envelope"></i>
                                <?php echo esc_html(get_theme_mod('pixis_header_email')); ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <?php
                $facebook  = get_theme_mod('pixis_social_facebook');
                $linkedin  = get_theme_mod('pixis_social_linkedin');
                $instagram = get_theme_mod('pixis_social_instagram');
                $youtube   = get_theme_mod('pixis_social_youtube');
                ?>

                <?php if ($facebook || $linkedin || $instagram || $youtube) : ?>
                    <div class="top-header-social-icon">
                        <span class="social-label">Conéctate a nuestras redes:</span>
                        <ul>
                            <?php if ($facebook) : ?>
                                <li><a href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <?php endif; ?>
                            <?php if ($linkedin) : ?>
                                <li><a href="<?php echo esc_url($linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <?php endif; ?>
                            <?php if ($instagram) : ?>
                                <li><a href="<?php echo esc_url($instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <?php endif; ?>
                            <?php if ($youtube) : ?>
                                <li><a href="<?php echo esc_url($youtube); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- header PC-->
<div id="sticky-header" class="solutek_nav_manu style-three">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a class="logo_img" href="<?php echo esc_url(home_url('/')); ?>" title="Inicio - Pixies">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pixies-logo-main.webp" width="150" alt="Logo oficial de Pixies a color" loading="lazy">
                    </a>
                    <a class="main_sticky" href="<?php echo esc_url(home_url('/')); ?>" title="Inicio - Pixies">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pixies-logo-white-sticky.webp" width="150" alt="Logo blanco de Pixies para navegación sticky" loading="lazy">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <nav class="solutek_menu">
                    <ul class="nav_scroll">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>nuestros-servicios">Nuestros Servicios</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>nosotros">Sobre Nosotros</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>blog">Blogs</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                <div class="header-menu-btn">
                    <div class="solutek-btn">
                        <a class="btn-2" href="<?php echo esc_url(home_url('/')); ?>contactanos">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header mobile -->
<div class="mobile-menu mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <nav class="solutek_menu">
        <ul class="nav_scroll">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>nuestros-servicios">Nuestros Servicios</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>nosotros">Sobre Nosotros</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>blog">Blogs</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>contactanos">Contacto</a></li>
        </ul>
    </nav>
</div>