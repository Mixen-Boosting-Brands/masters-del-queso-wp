<?php get_header(); ?>

    <section id="tiempo-receta" class="jumbotron-interna pt-60 pb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="300">
                        <i class="fa-solid fa-clock"></i>
                        <?php the_field("tiempo_de_preparacion"); ?>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="receta" class="py-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200">
                        <?php the_title(); ?> preparado con
                    </h2>
                    <h1 data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="300">
                            <?php
                            $producto = get_field("producto_relacionado");
                            if ($producto) {
                                echo esc_html($producto->post_title);
                            }
                            ?>
                    </h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="thumb-receta" class="py-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="100">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail("full", [
                            "class" => "img-fluid",
                        ]); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="mas-recetas" class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100">Conoce más recetas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="card" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200">
                        <img
                            src="./assets/images/productos/1.png"
                            class="icon img-fluid"
                            alt="..."
                        />
                        <div class="card-body">
                            <h1 class="card-title">
                                Bolitas de queso mozzarella
                            </h1>
                            <a href="#" class="btn btn-lg rounded-pill">Ver receta</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="card" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300">
                        <img
                            src="./assets/images/productos/1.png"
                            class="icon img-fluid"
                            alt="..."
                        />
                        <div class="card-body">
                            <h1 class="card-title">
                                Bolitas de queso mozzarella
                            </h1>
                            <a href="#" class="btn btn-lg rounded-pill">Ver receta</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-0">
                    <div class="card" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400">
                        <img
                            src="./assets/images/productos/1.png"
                            class="icon img-fluid"
                            alt="..."
                        />
                        <div class="card-body">
                            <h1 class="card-title">
                                Bolitas de queso mozzarella
                            </h1>
                            <a href="#" class="btn btn-lg rounded-pill">Ver receta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
