<?php
/*
Template Name: trabajosrealizados
*/
?>

<?php get_header(); ?>


<!-- presentacion de trabajos realizados -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=trabajos-realizados&showposts=1&paged=$paged"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="quienes mt-5">
                        <div class="spinner-grow text-warning" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div><?php the_title(); ?>
                    </h1>
                    <div class="linea-dorada"></div>
                    <p class="somoss"><?php the_field('descripcion'); ?></p>
                </div>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>


<!-- trabajos c/u -->

<div class="container">
    <div class="row  my-3">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=trabajos&showposts=6&paged=$paged"); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mt-5 ">
            <div>
                <h2 class="titulointe2"><?php the_title(); ?></h2>
                <?php   $image = get_field('trabajos');
                    if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" class="img-thumbnail card-body4" alt="" />
                <?php endif; ?>
                <p class="textod"><?php the_field('descripcion'); ?></p>
                <div class="text-center mb-5">
                    <a href="<?php the_permalink(); ?>" type="button" class="btn btn-warning text-center">Leer Más</a>
                </div>

            </div>

        </div>

        <?php endwhile; ?>
        <div class="paginacion">
            <?php wp_pagenavi(); ?>
        </div>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>