<?php get_header(); ?>

<section id="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <div id="contenedor-info" class="position-relative">
                    <h1
                        class="mb-4"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="0"
                    >
                        Encuentra el
                    </h1>
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo-queso-perfecto@2x.png"
                        alt="Queso Perfecto"
                        class="img-fluid mb-3"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    />
                    <h1
                        class="mb-5"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        para tus platillos
                    </h1>
                    <a
                        href="#contacto"
                        class="btn btn-secondary btn-lg rounded-pill"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="300"
                        >Conoce más aquí</a
                    >
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/thumb-jumbotron.png"
                    alt=""
                    class="thumb-jumbotron img-fluid d-lg-none"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                />
            </div>
        </div>
    </div>
    <img
        src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/images/thumb-jumbotron.png"
        alt=""
        class="thumb-jumbotron img-fluid d-none d-lg-block"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-delay="400"
    />
</section>

<section id="recetas" class="pt-60 pb-30">
    <div class="container">
        <div class="row text-center mb-5">
            <h1
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"
            >
                Cocina con los<br />
                <span class="text-uppercase">mejores quesos</span>
            </h1>
        </div>
        <div class="row">
            <div class="col-12 my-auto">

                <?php
                $args = [
                    "post_type" => "recetas",
                    "posts_per_page" => 1,
                    "orderby" => "date",
                    "order" => "DESC",
                ];

                $receta_query = new WP_Query($args);

                if ($receta_query->have_posts()):
                    while ($receta_query->have_posts()):

                        $receta_query->the_post();

                        // Get related 'producto' post via ACF Post Object field
                        $producto_post = get_field("producto_relacionado");
                        ?>

                        <div
                            class="card text-bg-light mb-4"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 mb-4 my-lg-auto">
                                        <h4>
                                            <span class="text-uppercase"><?php the_title(); ?></span>
                                            preparado con
                                        </h4>
                                        <h1>
                                            <?php if ($producto_post): ?>
                                                <?php echo esc_html(
                                                    $producto_post->post_title
                                                ); ?>
                                            <?php else: ?>
                                                <em>Producto no asignado</em>
                                            <?php endif; ?>
                                        </h1>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill">
                                            Ver receta
                                        </a>
                                    </div>
                                    <div class="col-lg-6 my-auto">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail(
                                                "thumb-producto-receta",
                                                [
                                                    "class" => "icon img-fluid",
                                                ]
                                            );
                                        } else {
                                            echo '<img src="' .
                                                get_template_directory_uri() .
                                                '/assets/images/placeholder.png" class="icon img-fluid" alt="Imagen no disponible">';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p class="text-center">No hay recetas disponibles.</p>';
                endif;
                ?>

            </div>
        </div>
    </div>
</section>

<section id="productos" class="py-60">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Explora nuestros productos
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Slider main container -->
                <div
                    class="swiper swiper-productos"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 7 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 8 -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/productos/1.png"
                                    class="icon img-fluid"
                                    alt="..."
                                />
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Imitación de Queso Chihuahua en
                                        Barra
                                    </h4>
                                    <p class="card-subtitle">
                                        Textura semi-suave, sabor similar al queso chihuahua.
                                    </p>
                                    <p class="card-text">
                                        Una opción económica con excelente sabor y rendimiento. Perfecto para negocios que buscan mantener costos bajos sin sacrificar la calidad.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
