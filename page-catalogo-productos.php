<?php
/**
 * Template Name: Catálogo de Productos
 */

get_header(); ?>

<section id="productos" class="container my-5">
    <h2 class="text-center mb-5">Catálogo de Productos</h2>
    <div class="row gy-4">

        <?php
        $args = [
            "post_type" => "productos",
            "posts_per_page" => -1,
            "orderby" => "title",
            "order" => "ASC",
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
                    <?php the_post_thumbnail("thumb-producto-receta", [
                        "class" => "icon img-fluid",
                    ]); ?>
                <?php endif; ?>
                <div class="card-body d-flex flex-column">
                    <h1 class="card-title h5"><?php the_title(); ?></h1>

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

        <?php $delay += 100; // increase delay per card for a nice staggered animation
            endwhile;
            wp_reset_postdata();
        else:
             ?>

        <p class="text-center">No hay productos disponibles en este momento.</p>

        <?php
        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>
