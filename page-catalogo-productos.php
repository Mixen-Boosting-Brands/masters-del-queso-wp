<?php
/* Template Name: Catálogo de Productos */
get_header(); ?>

<section id="quesos-100" class="jumbotron-interna py-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Quesos 100% Leche</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="<?php echo esc_url(
                    get_template_directory_uri()
                ); ?>/assets/images/productos/thumb-quesos-100@2x.png"
                    alt="" class="img-fluid" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" />
            </div>
        </div>
    </div>
</section>

<section id="catalogo" class="py-60">
    <div class="container">
        <?php
        $taxonomy = "category"; // your taxonomy (if you registered a custom one like 'categoria_producto', change this)

        $categories = get_terms([
            "taxonomy" => $taxonomy,
            "hide_empty" => true,
        ]);

        if (!empty($categories) && !is_wp_error($categories)):
            foreach ($categories as $category): ?>
            <div class="row mb-4">
                <div class="col-12">
                    <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                        <?php echo esc_html($category->name); ?>
                    </h1>
                </div>
            </div>

            <div class="row">
                <?php
                $productos_query = new WP_Query([
                    "post_type" => "productos",
                    "posts_per_page" => -1,
                    "tax_query" => [
                        [
                            "taxonomy" => $taxonomy,
                            "field" => "term_id",
                            "terms" => $category->term_id,
                        ],
                    ],
                ]);

                if ($productos_query->have_posts()):
                    $delay = 100;
                    while ($productos_query->have_posts()):
                        $productos_query->the_post(); ?>
                    <div class="col-lg-6 col-xl-3 my-auto">
                        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo esc_attr(
                            $delay
                        ); ?>">
                            <?php the_post_thumbnail("thumb-producto-receta", [
                                "class" => "icon img-fluid",
                            ]); ?>
                            <div class="card-body">
                                <h1 class="card-title"><?php the_title(); ?></h1>
                                <p class="card-subtitle">
                                    <?php echo esc_html(
                                        get_post_meta(
                                            get_the_ID(),
                                            "descripcion_breve",
                                            true
                                        )
                                    ); ?>
                                </p>
                                <p class="card-text"><?php the_content(); ?></p>
                                <a href="#" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                            </div>
                        </div>
                    </div>
                <?php $delay += 100;
                    endwhile;
                    wp_reset_postdata();
                else:
                     ?>
                    <div class="col-12">
                        <p>No hay productos en esta categoría.</p>
                    </div>
                <?php
                endif;
                ?>
            </div>

        <?php endforeach;
        else:
             ?>
            <p>No se encontraron categorías.</p>
        <?php
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
