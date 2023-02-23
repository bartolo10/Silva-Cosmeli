<?php
/*
Template Name: servicios
*/
?>
<?php get_header(); ?>


<!-- seccion de servicios  -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
        <h1 class="quienes mt-5">
                        <div class="spinner-grow text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div><?php the_title(); ?>
                    </h1>
                    <div class="linea-dorada2"></div>
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=servicios&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?>
            
            
            <div class="row mt-5">
                <div class="col-md-4">
                <h1 class="serviciostitulos"> <?php the_title(); ?> </h1>
                
                    <?php the_field('imagenes'); ?>
                    <div class="card bg-warning">
                        <div class="card-body bg-dark bg-gradient">
                            <div class="card-text parafo ">
                                <p><?php the_field('descripcion'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 lampara img-fluid">
                <?php the_post_thumbnail('post-thumbnail', ['class' => '', 'title' => 'Feature image']); ?>
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