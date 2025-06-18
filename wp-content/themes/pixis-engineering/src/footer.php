<!-- address area -->
<div class="address-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="address-box">
                    <div class="address-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/address1.webp" alt="address1">
                    </div>
                    <div class="address-title">
                        <h4 class="text-light">Lorem ipsum dolor sit.</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
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
                    <p class="footer-widget-text">Lorem ipsum dolor sit amet, Lorem
                        ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed</p>
                    <div class="footer-social">
                        <div class="footer-widget-social">
                            <a href="<?php echo esc_url(get_theme_mod('pixis_social_facebook', '#')); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo esc_url(get_theme_mod('pixis_social_linkedin', '#')); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="<?php echo esc_url(get_theme_mod('pixis_social_instagram', '#')); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?php echo esc_url(get_theme_mod('pixis_social_youtube', '#')); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
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
                        <li><a href="<?php echo esc_url(home_url('/')); ?>proyectos-destacados">Proeyctos destacados</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>nosotros">Sobre nosotros</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>blog">blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget-newsletter text-center">
                    <div class="widget-title">
                        <h2>Newsletter</h2>
                    </div>
                    <p class="newsletter-text">Globally monetize plug-and-play data it solu
                        monotonectally disseminate oriented busine
                        multifunctional mind design.</p>
                    <div class="Subscribe-form2">
                        <form>
                            <div class="form-field2">
                                <input type="email" name="EMAIL" placeholder="Enter Your E-mail" required="">
                                <button class="subscribe-button" type="submit"><i class="bi bi-send"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row copyright">
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="copyright-text">
            <p>© Copyright <span id="current-year"></span> By Pixis Engineering sas</p>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="copyright-list">
            <ul>
                <li><a href="index.html">Privacy Policy</a></li>
                <li><a href="index-2.html">Supports</a></li>
            </ul>
        </div>
    </div>
</div>


<script>
    // Inyecta dinámicamente el año actual
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>