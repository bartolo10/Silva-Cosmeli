<?php get_header(); ?>


<!-- seccion principal presentacion -->



<section>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 text-center texto">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=inicio1"); ?>
                <?php while (have_posts()) : the_post(); ?>

               
                <div class="imagenprincipal mx-auto">

                    <?php the_field('galeria_de_imagenes'); ?>

                </div>



                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>

<!-- destacados  -->


<section class="container2 ">
    <div class="container ">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=inicio2&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-6 ">

                <div class="seccion-roja">
                    <div class="imagen-seguridad">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => '', 'title' => 'Feature image']); ?>
                    </div>
                </div>


            </div>
            <div class="col-md-6 my-5">

                <div class="seccion-roja2">
                    <div class="texto-seguridad">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <div class="texto-seguridad">
                    <p><?php the_field('contenido'); ?></p>
                </div>


            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>