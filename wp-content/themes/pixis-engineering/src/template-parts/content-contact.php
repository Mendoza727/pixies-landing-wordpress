<section id="contact">
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-left">
                        <h5 class="section-sub-title">Contactanos</h5>
                        <h1 class="section-main-title"><?php echo get_theme_mod('pixis_contact_h1_line1'); ?></h1>
                        <h1 class="section-main-title"><?php echo get_theme_mod('pixis_contact_h1_line2'); ?></h1>
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
</section>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('dreamit-form');
        if (form) {
            form.reset();
        }
    });
</script>