<?php
/*
Template Name: nosotros
*/
get_header();
?>
<div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
</div>

<!-- about us -->
<div class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title text-left">
                    <h5 class="section-sub-title mb-4">Nosotros</h5>
                    <h1 class="section-main-title" style="z-index: 1;
    position: relative;">We Can Clients With The</h1>
                    <h1 class="section-main-title">About <span>Solution.</span></h1>
                    <p class="section-title-descr">Monotonectally repurpose maintainable infrastruct whereas solutek in
                        fermentum quis tempo sapien maximus design.
                    </p>
                </div>
                <div class="about-us-content">
                    <div class="about-us-list">
                        <ul>
                            <li><span>Best IT Solutions & Service</span></li>
                            <li><span>24 Hour's Customer Service</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-counter-box">
                            <div class="counter-icon">
                                <img src="http://localhost/template/solutek-demo/assets/images/inner/counter-icon.png" alt="icon">
                            </div>
                            <div class="counter-content">
                                <h4 class="counter">826</h4>
                                <span style="color: var(--color-emergent-orange) !important;">+</span>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-thumb">
                    <div class="about-us-img">
                        <img src="http://localhost/template/solutek-demo/assets/images/inner/about-us-thu.png" alt="thumb">
                    </div>
                    <div class="about-us-video-icon">
                        <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i class="bi bi-play"></i><span>WATCH VIDEO</span></a>
                    </div>
                    <div class="about-us-shape">
                        <img src="http://localhost/template/solutek-demo/assets/images/inner/us-shape.png" alt="shape">
                    </div>
                </div>
            </div>
        </div>
        <div class="about2-us-shape">
            <img src="http://localhost/template/solutek-demo/assets/images/inner/about-us-sh.png" alt="shape">
        </div>
        <div class="about-us-shape2">
            <img src="http://localhost/template/solutek-demo/assets/images/inner/about-us-she.png" alt="shape">
        </div>
    </div>
</div>


<!-- projects -->
<div class="mb-5">
    <?php
    include(get_template_directory() . '/src/template-parts/content-portfolio.php');
    ?>
</div>

<!-- blogs -->
<?php
include(get_template_directory() . '/src/template-parts/content-blog.php');
?>

<!-- footer -->
<?php get_footer(); ?>