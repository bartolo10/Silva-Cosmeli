<?php get_header(); ?>

<!-- singles cuerpo -->

<div class="container my-5">
    <div class="row">
        <div class="col-md-6  tamanos">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="textodetitulo">

                <h1><?php the_title(); ?></h1>
                <h2 class="my-5 "><?php the_field('descripcion'); ?></h2>

            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>


        <div class="col-md-6 ">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="casas ">
                <?php 
                    $image = get_field('imagenn');
                    if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>


    </div>
</div>






<div class="container my-5">


    <div class="row">
        <div class="col-md-6">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php the_field('slider'); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-6">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <h2 class="textosdecasa"><?php the_field('nombre'); ?></h2>
            <div class="my-5">

                <ul class="tamanos2">
                    <li>
                        <h2><?php the_field('ubicacion'); ?></h2>
                    </li>
                    <li>
                        <h2><?php the_field('ano'); ?></h2>
                    </li>
                    <li>
                        <h2><?php the_field('tiempo_de_realizacion'); ?></h2>
                    </li>
                    <li>
                        <h2><?php the_field('metros_cuadrados'); ?></h2>
                    </li>
                    <li>
                        <h2><?php the_field('descripcion'); ?></h2>
                    </li>
                </ul>

                <a class="btn btn-warning atras" href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
            </div>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>