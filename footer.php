
<section id="eligenos" class="py-60">
    <div class="container">
        <div class="row" data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-delay="100">
            <div
                class="col-6 offset-3 col-md-3 offset-md-2 mb-4 my-md-auto text-center"
            >
                <a href="#">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo-carnemart@2x.png"
                        alt=""
                        class="img-fluid"
                    />
                </a>
            </div>
            <div
                class="col-md-6 offset-md-1 my-auto text-center text-md-start"
            >
                <h1>
                    Elígenos como tu<br />
                    proveedor
                </h1>
                <a href="#" class="btn btn-lg rounded-pill"
                    >Conoce más aquí</a
                >
            </div>
        </div>
    </div>
</section>

<footer class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4>Mapa del sitio</h4>
                <nav>
                    <ul class="list-unstyled">
                        <li>
                            <a href="<?php echo esc_url(
                                home_url()
                            ); ?>">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Productos</a>
                        </li>
                        <li>
                            <a href="#">Beneficios</a>
                        </li>
                        <li>
                            <a href="#">Recetas</a>
                        </li>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4">
                <h4>Términos y condiciones</h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Saber más</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 offset-md-1 my-auto text-center">
                <ul class="social list-inline mb-0">
                    <li class="list-inline-item">
                        <a
                            href="https://www.instagram.com/carnemart"
                            target="_blank"
                        >
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://www.facebook.com/CarneMartOficial"
                            target="_blank"
                        >
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a
                            href="https://www.tiktok.com/@carnemartoficial"
                            target="_blank"
                        >
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
<i class="fab fa-whatsapp whatsapp-icon"></i>
</a -->

<?php wp_footer(); ?>

<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"
></script>
<script src="https://tympanus.net/Development/Arctext/js/jquery.arctext.js"></script>
<script src="<?php echo esc_url(
    get_template_directory_uri()
); ?>/assets/js/app.bundle.js"></script>

<script>
    $(document).ready(function () {
        const h1Element = $("#quesos-100 h1");

        if (h1Element.length > 0) {
            h1Element.arctext({ radius: 600 });
        }
    });
</script>

<!-- Google tag (gtag.js) -->
<script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-0HXFZR3VJ3"
></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-0HXFZR3VJ3");
</script>
</body>
</html>
