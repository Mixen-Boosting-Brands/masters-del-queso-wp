<?php get_header(); ?>

<section id="recetas" class="py-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                    Recetas
                </h1>
            </div>
        </div>

        <div class="row">
            <?php
            // Query posts in this category
            $product_query = new WP_Query([
                "post_type" => "recetas",
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
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail("thumb-producto-receta", [
                                "class" => "icon img-fluid",
                            ]); ?>
                        </a>
                    <?php else: ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/placeholder.png" class="icon img-fluid" alt="<?php the_title_attribute(); ?>" />
                        </a>
                    <?php endif; ?>

                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>">
                            <h1 class="card-title"><?php the_title(); ?></h1>
                        </a>

                        <?php if (get_field("descripcion_breve")): ?>
                            <p class="card-subtitle"><?php the_field(
                                "descripcion_breve"
                            ); ?></p>
                        <?php endif; ?>

                        <p class="card-text"><?php the_excerpt(); ?></p>

                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg rounded-pill">Ver receta</a>
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
    </div>
</section>

<?php get_footer(); ?>
