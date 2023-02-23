<?php
/*
Template Name: Somos
*/
?>
<?php get_header(); ?>


<!-- redaccion somos -->

<div class="container-fluid">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=somos&showposts=1"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-6 my-5">


            <h1 class="quieness mt-5">
                <div class="spinner-grow text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div><?php the_title(); ?>
            </h1>
            <div class="linea-dorada5"></div>
            <p class="somoss"><?php the_field('descripcion'); ?></p>
        </div>
        <div class="col-md-6">
            <div class="imagengrandediv mt-5">
                <?php 
                    $image = get_field('imagengrande');
                    if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
            </div>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>


<!-- integrantes presentacion   -->

<div class="container-fluid ">
    <div class="row ">
        <div class="col-md-12">
            <h1 class="integr my-5">Nuestros Integrantes</h1>
            <div class="row">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=integrantes&showposts=5"); ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="col-md-4 d-flex">
                    <div class="card card-body1 cardin">
                        <div class="text-center">
                            <?php 
                    $image = get_field('fotosintegrantes');
                    if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="card-body bg-secundary bg-gradient">
                            <div>
                                <h2 class="titulointe"><?php the_title(); ?></h2>
                            </div>
                            <div class="titulo-card-rojo">
                                <p class="card-text arqui">Arquitecto</p>
                                <p class="descripcion"><?php the_field('descripcion'); ?></p>
                            </div>

                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
    </div>

    <?php get_footer(); ?>