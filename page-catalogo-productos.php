<?php
/**
 * Template Name: Catálogo de Productos
 */

get_header(); ?>

<section id="productos" class="container my-5">
    <h2 class="text-center mb-5">Catálogo de Productos</h2>

    <?php
    // Get product categories (assuming your taxonomy is called 'categoria-producto')
    $terms = get_terms([
        "taxonomy" => "categoria-producto",
        "hide_empty" => true,
        "orderby" => "name",
        "order" => "ASC",
    ]);

    if (!empty($terms) && !is_wp_error($terms)):
        foreach ($terms as $term): ?>

    <h3 class="mb-4"><?php echo esc_html($term->name); ?></h3>
    <div class="row gy-4 mb-5">

        <?php
        $args = [
            "post_type" => "productos",
            "posts_per_page" => -1,
            "orderby" => "title",
            "order" => "ASC",
            "tax_query" => [
                [
                    "taxonomy" => "categoria-producto",
                    "field" => "term_id",
                    "terms" => $term->term_id,
                ],
            ],
        ];

        $productos_query = new WP_Query($args);

        if ($productos_query->have_posts()):
            $delay = 0;
            while ($productos_query->have_posts()):

                $productos_query->the_post();
                $receta = get_field("receta_relacionada");
                $subtitulo = get_field("subtitulo");
                ?>

        <div class="col-lg-6 col-xl-3 my-auto">
            <div class="card h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo esc_attr(
                $delay
            ); ?>">

                <?php if (has_post_thumbnail()): ?>
                    <?php if ($receta): ?>
                        <a href="<?php echo esc_url(
                            get_permalink($receta)
                        ); ?>">
                            <?php the_post_thumbnail("thumb-producto-receta", [
                                "class" => "icon img-fluid",
                            ]); ?>
                        </a>
                    <?php else: ?>
                        <span class="d-block">
                            <?php the_post_thumbnail("thumb-producto-receta", [
                                "class" => "icon img-fluid opacity-50",
                            ]); ?>
                        </span>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="card-body d-flex flex-column">

                    <?php if ($receta): ?>
                        <h1 class="card-title h5">
                            <a href="<?php echo esc_url(
                                get_permalink($receta)
                            ); ?>" class="text-decoration-none">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                    <?php else: ?>
                        <h1 class="card-title h5 text-muted"><?php the_title(); ?></h1>
                    <?php endif; ?>

                    <?php if ($subtitulo): ?>
                        <p class="card-subtitle text-muted mb-2"><?php echo esc_html(
                            $subtitulo
                        ); ?></p>
                    <?php endif; ?>

                    <p class="card-text mb-4"><?php echo get_the_excerpt(); ?></p>

                    <?php if ($receta): ?>
                        <a href="<?php echo esc_url(
                            get_permalink($receta)
                        ); ?>" class="btn btn-primary btn-lg rounded-pill mt-auto">Ver receta</a>
                    <?php else: ?>
                        <a href="#" class="btn btn-primary btn-lg rounded-pill mt-auto disabled" tabindex="-1" aria-disabled="true">Sin receta</a>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <?php $delay += 100;
            endwhile;
            wp_reset_postdata();
        else:
             ?>

        <p class="text-center">No hay productos en esta categoría.</p>

        <?php
        endif;
        ?>

    </div>

    <?php endforeach; ?>

    <?php
    else:
         ?>

    <p class="text-center">No hay categorías de productos disponibles.</p>

    <?php
    endif;
    ?>

</section>

<?php get_footer(); ?>
