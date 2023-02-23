<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>

<!-- titulo-->

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=info"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <h1 class="quienes3 mt-5">
                <div class="spinner-grow text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div><?php the_title(); ?>
            </h1>
            <div class="linea-dorada3"></div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
<!--formulario  -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=form"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="form">
                <h1 class="formulario"> <?php the_title(); ?> </h1>
                <?php the_content(); ?> </p>
            </div>


            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>



<!-- mapa -->

<div class="container">
    <div class="row ">
        <div class="col-md-9 mx-auto ">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=mapa"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53321.92778662694!2d-70.77562840811395!3d-33.354863390799544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0e50f3ed0ff%3A0x78c1e18cf8e3ebd0!2sQuilicura%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1654052475282!5m2!1ses!2scl"
                width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-- datos  -->

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 mx-auto bg-dark bg-gradient">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=mapa"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="blanco">
            <h5 class="ubicacion">Ubicacion: <?php the_field('ubicacion'); ?></h5>
            <h5 class="ubicacion">Horarios: <?php the_field('horarios'); ?></h5>
            </div>
            
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>







<?php get_footer(); ?>