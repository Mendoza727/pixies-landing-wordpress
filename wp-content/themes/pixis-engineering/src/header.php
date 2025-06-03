<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="header-info">
                    <ul>
                        <li><i class="bi bi-geo-alt-fill"></i>
                            <?php echo esc_html(get_theme_mod('pixis_header_address', 'Carrera 55 #159-53 Bogotá, Colombia.')); ?>
                        </li>
                        <li class="exam-gmail"><i class="bi bi-envelope"></i>
                            <?php echo esc_html(get_theme_mod('pixis_header_email', 'example@gmail.com')); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="top-header-social-icon">
                    <span class="social-label">Conéctate a nuestras redes:</span>
                    <ul>
                        <li><a href="<?php echo esc_url(get_theme_mod('pixis_social_facebook', '#')); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo esc_url(get_theme_mod('pixis_social_linkedin', '#')); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="<?php echo esc_url(get_theme_mod('pixis_social_instagram', '#')); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo esc_url(get_theme_mod('pixis_social_youtube', '#')); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
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
                        <li><a href="#hero">Inicio</a></li>
                        <li><a href="#services">Nuestros Servicios</a></li>
                        <li><a href="#aboutUs">Sobre Nosotros</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                <div class="header-menu-btn">
                    <div class="solutek-btn">
                        <a class="btn-2" href="#contact">Contactanos</a>
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
            <li><a href="#hero">Inicio</a></li>
            <li><a href="#services">Nuestros Servicios</a></li>
            <li><a href="#aboutUs">Sobre Nosotros</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contáctanos</a></li>
        </ul>
    </nav>
</div>