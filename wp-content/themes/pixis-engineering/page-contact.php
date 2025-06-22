<?php
/*
Template Name: contactanos
*/
get_header();
?>
<main id="primary" class="site-main">
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <div class="contact-area p-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-left">
                        <h5 class="section-sub-title">Contactanos</h5>
                        <h1 class="section-main-title">Make an Online Appoinemnt Booking</h1>
                        <h1 class="section-main-title">For Business Planing.</h1>
                    </div>
                    <div class="contact_from_box">
                        <form action="https://formspree.io/f/xjkrowap" method="POST" id="dreamit-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box">
                                        <input
                                            type="text"
                                            name="fullname"
                                            placeholder="Tu nombre completo *"
                                            required
                                            autocomplete="name"
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box">
                                        <input
                                            type="email"
                                            name="email"
                                            placeholder="Correo *"
                                            placeholder="ejemplo@correo.com"
                                            required
                                            autocomplete="email"
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box">
                                        <input
                                            type="tel"
                                            name="phone"
                                            placeholder="Ej: +57 300 123 4567"
                                            required
                                            autocomplete="tel"
                                            pattern="[\d\s\+\-()]{7,20}"
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box">
                                        <input
                                            type="text"
                                            id="city"
                                            name="city"
                                            placeholder="Ej: Bogotá"
                                            required
                                            autocomplete="address-level2"
                                            aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="¿En que te podemos ayudar?"></textarea>
                                    </div>
                                    <div class="quote_button">
                                        <button class="btn" type="submit">Enviar Mensaje <i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status" class="error"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- maps area -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.162334327515!2d-74.06002022627992!3d4.741836241302201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f850b91c32fd1%3A0xc75e3a059b0b8442!2sCra.%2055%20%23159-53%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1750192896344!5m2!1ses-419!2sco" width=" 600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <?php get_footer(); ?>
    </div>
</main>