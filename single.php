<?php get_header(); ?>

    <section class="jumbotron-interna py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200">
                        <?php the_title(); ?>
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

<?php get_footer(); ?>
