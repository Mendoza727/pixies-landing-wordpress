<!-- address area -->
<div class="address-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="address-box">
                    <div class="address-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/address1.webp" alt="address1">
                    </div>
                    <div class="address-title">
                        <h4 class="text-light">
                            <?php echo esc_html(get_theme_mod('pixis_footer_address_title', 'Lorem ipsum dolor sit.')); ?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="address-box2">
                    <div class="address-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/address2.webp" alt="address2">
                    </div>
                    <div class="solutek-btn">
                        <!-- agregamo la funcionalidad que pusimos en el function -->
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_theme_mod('pixis_footer_phone', '+57 300 000 0000'))); ?>"> <?php echo esc_html(get_theme_mod('pixis_footer_phone', '+57 300 000 0000')); ?>
                            <div class="solutek-hover-btn hover-bx"></div>
                            <div class="solutek-hover-btn hover-bx2"></div>
                            <div class="solutek-hover-btn hover-bx3"></div>
                            <div class="solutek-hover-btn hover-bx4"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer area -->
<div class="footer-area">
    <div class="container">
        <div class="row footer">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" title="Inicio - Pixies">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pixies-logo-white-sticky.webp" width="200" alt="Logo blanco de Pixies en el pie de página" loading="lazy">
                        </a>
                    </div>
                    <p class="footer-widget-text">
                        <?php echo esc_html(get_theme_mod('pixis_footer_widget_text', 'Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed')); ?>
                    </p>
                    <div class="footer-social">
                        <?php
                        $facebook  = get_theme_mod('pixis_social_facebook');
                        $linkedin  = get_theme_mod('pixis_social_linkedin');
                        $instagram = get_theme_mod('pixis_social_instagram');
                        $youtube   = get_theme_mod('pixis_social_youtube');
                        ?>

                        <?php if ($facebook || $linkedin || $instagram || $youtube) : ?>
                            <div class="footer-widget-social">
                                <?php if ($facebook) : ?>
                                    <a href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <?php endif; ?>
                                <?php if ($linkedin) : ?>
                                    <a href="<?php echo esc_url($linkedin); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <?php endif; ?>
                                <?php if ($instagram) : ?>
                                    <a href="<?php echo esc_url($instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                <?php endif; ?>
                                <?php if ($youtube) : ?>
                                    <a href="<?php echo esc_url($youtube); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget left">
                    <div class="widget-title">
                        <h2>Useful Links</h2>
                    </div>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>nuestros-servicios">Nuestros servicios</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>nosotros">Sobre nosotros</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>blog">blogs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-widget-newsletter text-center">
                    <div class="widget-title">
                        <h2><?php echo esc_html(get_theme_mod('pixis_footer_newsletter_title', 'Newsletter')); ?></h2>
                    </div>
                    <p class="newsletter-text">
                        <?php echo esc_html(get_theme_mod('pixis_footer_newsletter_text', 'Globally monetize plug-and-play data it solu monotonectally disseminate oriented busine multifunctional mind design.')); ?>
                    </p>
                    <div class="Subscribe-form2">
                        <form>
                            <div class="form-field2">
                                <input type="email" name="EMAIL" placeholder="Enter Your E-mail" required="">
                                <button class="subscribe-button" type="submit" aria-label="Suscribirse" title="Suscribirse"><i class="bi bi-send"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row copyright align-items-center text-center">
    <!-- Columna izquierda -->
    <div class="col-lg-4 col-md-4 col-sm-12 mb-2 mb-md-0">
        <div class="copyright-text">
            <p>© Copyright <span id="current-year"></span> By Pixis Engineering sas</p>
        </div>
    </div>

    <!-- Imagen en el centro -->
    <div class="col-lg-4 col-md-4 col-sm-12 mb-2 mb-md-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/penguin.webp" alt="logo-empresa-" class="img-fluid mx-auto d-block" style="max-height: 40px;" loading="lazy">
    </div>

    <!-- Columna derecha -->
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="copyright-list">
            <ul class="list-inline m-0">
                <li class="list-inline-item"><a href="index.html">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="index-2.html">Supports</a></li>
            </ul>
        </div>
    </div>
</div>



<script>
    // Inyecta dinámicamente el año actual
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>