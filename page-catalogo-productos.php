<?php get_header(); ?>

<section id="quesos-100" class="jumbotron-interna py-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    Quesos 100% Leche
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/productos/thumb-quesos-100@2x.png"
                    alt=""
                    class="img-fluid"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                />
            </div>
        </div>
    </div>
</section>

<section id="catalogo" class="py-60">
    <div class="container">

        <?php
        // Get all product categories
        $product_categories = get_categories([
            "taxonomy" => "category", // or 'producto_categoria' if custom taxonomy
            "hide_empty" => true,
            "orderby" => "term_order",
        ]);

        foreach ($product_categories as $category): ?>

        <div class="row mb-4">
            <div class="col-12">
                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                    <?php echo esc_html($category->name); ?>
                </h1>
            </div>
        </div>

        <div class="row">
            <?php
            // Query posts in this category
            $product_query = new WP_Query([
                "post_type" => "productos",
                "posts_per_page" => -1,
                "tax_query" => [
                    [
                        "taxonomy" => "category", // or 'producto_categoria' if custom taxonomy
                        "field" => "slug",
                        "terms" => $category->slug,
                    ],
                ],
            ]);

            if ($product_query->have_posts()):
                $delay = 100;
                while ($product_query->have_posts()):
                    $product_query->the_post(); ?>

            <div class="col-lg-6 col-xl-3 my-auto">
                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo esc_attr(
                    $delay
                ); ?>">
                    <?php if (has_post_thumbnail()): ?>
                        <?php if (get_field("receta_relacionada")): ?>
                            <a href="<?php the_field("receta_relacionada"); ?>">
                                <?php the_post_thumbnail(
                                    "thumb-producto-receta",
                                    [
                                        "class" => "icon img-fluid",
                                    ]
                                ); ?>
                            </a>
                        <?php else: ?>
                            <a href="<?php the_field(
                                "receta_relacionada"
                            ); ?>" class="disabled">
                                <?php the_post_thumbnail(
                                    "thumb-producto-receta",
                                    [
                                        "class" => "icon img-fluid",
                                    ]
                                ); ?>
                            </a>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if (get_field("receta_relacionada")): ?>
                            <a href="<?php the_field("receta_relacionada"); ?>">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/placeholder.png" class="icon img-fluid" alt="<?php the_title_attribute(); ?>" />
                            </a>
                        <?php else: ?>
                            <a href="<?php the_field(
                                "receta_relacionada"
                            ); ?>" class="disabled">
                                <img src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/placeholder.png" class="icon img-fluid" alt="<?php the_title_attribute(); ?>" />
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div class="card-body">
                        <?php if (get_field("receta_relacionada")): ?>
                            <a href="<?php the_field("receta_relacionada"); ?>">
                                <h1 class="card-title"><?php the_title(); ?></h1>
                            </a>
                        <?php else: ?>
                            <a href="<?php the_field(
                                "receta_relacionada"
                            ); ?>" class="disabled">
                                <h1 class="card-title"><?php the_title(); ?></h1>
                            </a>
                        <?php endif; ?>

                        <?php if (get_field("descripcion_breve")): ?>
                            <p class="card-subtitle"><?php the_field(
                                "descripcion_breve"
                            ); ?></p>
                        <?php endif; ?>

                            <p class="card-text"><?php the_content(); ?></p>

                        <?php if (get_field("receta_relacionada")): ?>
                            <a href="<?php the_field(
                                "receta_relacionada"
                            ); ?>" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
                        <?php else: ?>
                            <a href="<?php the_field(
                                "receta_relacionada"
                            ); ?>" class="btn btn-primary btn-lg rounded-pill disabled">Ver receta</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php $delay += 100;
                endwhile;
                wp_reset_postdata();
            else:
                 ?>
                <div class="col-12">
                    <p>No hay productos disponibles en esta categoría.</p>
                </div>
            <?php
            endif;
            ?>
        </div>

        <?php endforeach;
        ?>

    </div>
</section>

<?php get_footer(); ?>
