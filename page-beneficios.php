<?php get_header(); ?>

<section id="beneficios" class="jumbotron-interna pt-60 pb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/thumb-beneficios.png"
                    alt=""
                    class="img-fluid"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                />
            </div>
            <div class="col-lg-6 my-auto text-center">
                <h1
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    ¿Por qué elegir a
                </h1>
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/logo-carnemart@2x.png"
                    alt="CarneMart"
                    class="img-fluid my-4"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                />
                <h1
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    como tu proveedor<br />
                    de quesos?
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="razones" class="pt-30 pb-60">
    <div class="container">
        <div class="row text-center">
            <div
                class="col-md-4 mb-4 mb-md-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"
            >
                <img
                    class="icono-beneficio"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/beneficios/1@2x.png"
                    alt=""
                    class="img-fluid"
                />
                <h1>
                    Variedad<br />
                    inigualable
                </h1>
                <p>
                    Desde quesos 100% leche hasta opciones económicas
                    para cualquier negocio.
                </p>
            </div>
            <div
                class="col-md-4 mb-4 mb-md-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <img
                    class="icono-beneficio"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/beneficios/2@2x.png"
                    alt=""
                    class="img-fluid"
                />
                <h1>
                    Calidad<br />
                    asegurada
                </h1>
                <p>
                    Productos que conservan su sabor y frescura en
                    cualquier preparación.
                </p>
            </div>
            <div
                class="col-md-4 mb-4 mb-md-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
            >
                <img
                    class="icono-beneficio"
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/beneficios/3@2x.png"
                    alt=""
                    class="img-fluid"
                />
                <h1>
                    Soluciones<br />
                    para negocios
                </h1>
                <p>
                    Cantidades y formatos ideales para restaurantes,
                    taquerías y cafeterías.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
