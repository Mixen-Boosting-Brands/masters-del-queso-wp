<?php
/*
Template Name: Catálogo de Productos
*/

get_header();

// Get all categories in 'categoria_producto' taxonomy
$categories = get_terms([
    "taxonomy" => "categoria_producto",
    "hide_empty" => false,
]);
?>

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

        <?php if (!empty($categories) && !is_wp_error($categories)): ?>

            <?php foreach ($categories as $category): ?>

                <div class="row mb-4">
                    <div class="col-12">
                        <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                            <?php echo esc_html($category->name); ?>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <?php
                    // Query productos by category
                    $args = [
                        "post_type" => "productos",
                        "posts_per_page" => -1,
                        "tax_query" => [
                            [
                                "taxonomy" => "categoria_producto",
                                "field" => "slug",
                                "terms" => $category->slug,
                            ],
                        ],
                    ];

                    $productos_query = new WP_Query($args);

                    if ($productos_query->have_posts()):
                        $delay = 100;

                        while ($productos_query->have_posts()):

                            $productos_query->the_post();

                            // Get related receta post (ACF 'receta_relacionada' relationship field)
                            $receta_obj = get_field("receta_relacionada");
                            $has_receta =
                                ($receta_obj && is_object($receta_obj)) ||
                                (is_array($receta_obj) && !empty($receta_obj));

                            // If it's an array (multiple relations), take the first
                            if (is_array($receta_obj)) {
                                $receta_post = reset($receta_obj);
                            } else {
                                $receta_post = $receta_obj;
                            }

                            // URL for receta or '#' if none
                            $receta_url = $has_receta
                                ? get_permalink($receta_post->ID)
                                : "#";

                            // Disable class if no receta
                            $disabled_class = $has_receta ? "" : " disabled";
                            ?>
                            <div class="col-lg-6 col-xl-3 my-auto">
                                <div
                                    class="card"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-aos-delay="<?php echo esc_attr(
                                        $delay
                                    ); ?>"
                                >
                                    <?php if ($has_receta): ?>
                                        <a href="<?php echo esc_url(
                                            $receta_url
                                        ); ?>" class="d-block">
                                            <?php the_post_thumbnail(
                                                "thumb-producto-receta",
                                                ["class" => "icon img-fluid"]
                                            ); ?>
                                        </a>
                                    <?php else: ?>
                                        <?php the_post_thumbnail(
                                            "thumb-producto-receta",
                                            ["class" => "icon img-fluid"]
                                        ); ?>
                                    <?php endif; ?>

                                    <div class="card-body">
                                        <?php if ($has_receta): ?>
                                            <h1 class="card-title">
                                                <a href="<?php echo esc_url(
                                                    $receta_url
                                                ); ?>" class="text-decoration-none">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h1>
                                        <?php else: ?>
                                            <h1 class="card-title text-muted"><?php the_title(); ?></h1>
                                        <?php endif; ?>

                                        <?php if (has_excerpt()): ?>
                                            <p class="card-subtitle"><?php echo get_the_excerpt(); ?></p>
                                        <?php endif; ?>

                                        <p class="card-text">
                                            <?php the_content(); ?>
                                        </p>

                                        <a
                                            href="<?php echo esc_url(
                                                $receta_url
                                            ); ?>"
                                            class="btn btn-primary btn-lg rounded-pill<?php echo $disabled_class; ?>"
                                            <?php echo $has_receta
                                                ? ""
                                                : 'aria-disabled="true" tabindex="-1"'; ?>
                                        >
                                            Ver receta
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php $delay += 100;
                        endwhile;
                    else:
                         ?>
                        <div class="col-12">
                            <p>No hay productos disponibles en esta categoría.</p>
                        </div>
                    <?php
                    endif;

                    wp_reset_postdata();
                    ?>
                </div>

            <?php endforeach; ?>

        <?php else: ?>
            <p>No se encontraron categorías de productos.</p>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
