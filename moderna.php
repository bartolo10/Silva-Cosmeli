<?php get_header(); ?>

<div class="container-fluid bg-gris">
    <div class="row">
    <div class="col-md-4">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('descripcion'); ?></h2>
            <a class="btn btn-primary" href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
         
        <div class="col-md-4">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_field('nombre'); ?></h2>
            <h2><?php the_field('ubicacion'); ?></h2>
            <h2><?php the_field('ano'); ?></h2>
            <h2><?php the_field('tiempo_de_realizacion'); ?></h2>
            <h2><?php the_field('metros_cuadrados'); ?></h2>
            <h2><?php the_field('descripcion'); ?></h2>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-4 ">
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

</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>