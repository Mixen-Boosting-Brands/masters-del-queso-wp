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
                        href="#productos"
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
                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                    Explora nuestros productos
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <!-- Slider main container -->
                <div class="swiper swiper-productos" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">

                        <?php
                        // Query all posts from 'productos' CPT
                        $productos_query = new WP_Query([
                            "post_type" => "productos",
                            "posts_per_page" => -1,
                            "orderby" => "date",
                            "order" => "DESC",
                        ]);

                        if ($productos_query->have_posts()):
                            while ($productos_query->have_posts()):

                                $productos_query->the_post();

                                // Optional: custom fields or ACF fields here
                                $imagen = get_the_post_thumbnail_url(
                                    get_the_ID(),
                                    "medium_large"
                                );
                                $subtitulo = get_field("subtitulo"); // Example ACF field
                                $descripcion = get_field("descripcion"); // Example ACF field
                                $link_receta = get_field("link_receta");

                                // Example ACF field
                                ?>

                        <div class="swiper-slide">
                            <div class="card">
                                <?php if ($imagen): ?>
                                    <img src="<?php echo esc_url(
                                        $imagen
                                    ); ?>" class="icon img-fluid" alt="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>

                                <div class="card-body">
                                    <h1 class="card-title"><?php the_title(); ?></h1>

                                    <?php if ($subtitulo): ?>
                                        <p class="card-subtitle"><?php echo esc_html(
                                            $subtitulo
                                        ); ?></p>
                                    <?php endif; ?>

                                    <?php if ($descripcion): ?>
                                        <p class="card-text"><?php echo esc_html(
                                            $descripcion
                                        ); ?></p>
                                    <?php else: ?>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                    <?php endif; ?>

                                    <?php if ($link_receta): ?>
                                        <a href="<?php echo esc_url(
                                            $link_receta
                                        ); ?>" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo "<p>No hay productos disponibles en este momento.</p>";
                        endif;
                        ?>

                    </div>

                    <!-- Swiper navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
