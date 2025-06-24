<?php

/**
 * Template part for displaying hero section
 *
 * @package Pixis_Engineering
 */
?>

<!-- estructura HTML de tu seccion hero -->
<div class="hero">
    <div class="hero-area style-three d-flex align-items-center">
        <div class="container">
            <div class="row hero align-items-center">
                <div class="col-lg-5 col-md-7">
                    <div class="hero-contant">
                        <h6><?php echo esc_html(get_theme_mod('pixis_hero_subtitle', 'BEST IT SOLUTION PROVIDER')); ?></h6>
                        <h1><?php echo esc_html(get_theme_mod('pixis_hero_title1', 'Elevate Your')); ?></h1>
                        <span><?php echo esc_html(get_theme_mod('pixis_hero_span', 'Business')); ?></span>
                        <h1><?php echo esc_html(get_theme_mod('pixis_hero_title2', 'with IT Excellence')); ?></h1>
                        <p><?php echo esc_html(get_theme_mod('pixis_hero_paragraph', 'We have been operating for over a decade prvid have beens')); ?></p>
                        <div class="solutek-btn">
                            <a href="<?php echo esc_url(home_url('/')); ?>nosotros" class="btn-2">Conoce Nuestros Expertos</a>
                        </div>
                        <div class="hero-left-shape">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-3/hero-animated-loop.webp" alt="Animación circular geométrica con degradado">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="hero-thumb-3">
                        <div class="hero-img">
                            <img
                                class="lazy-desktop-img d-none d-lg-flex d-xl-flex"
                                loading="lazy"
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image-2.webp"
                                alt="thumb">
                        </div>
                        <div class="hero-thumb-shape">
                            <img
                                class="lazy-shape"
                                data-src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-x.webp"
                                alt="shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.innerWidth >= 992) {
            const lazyImg = document.querySelector(".lazy-desktop-img");
            if (lazyImg && lazyImg.dataset.src) {
                lazyImg.src = lazyImg.dataset.src;
            }

        }
        
        const img = document.querySelector('.lazy-shape');
        if (img && img.dataset.src) {
            img.src = img.dataset.src;
        }
    });
</script>