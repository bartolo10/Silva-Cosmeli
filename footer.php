


<footer class="darkfooter mt-5">
    <div class="container-fluid py-4">
        <div class="row mx-3">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=footer"); ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-6">
                <div class="copyright">
                    <p> <?php the_content(); ?> </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="social">
                    <a href="#"> <i class="fab fa-twitter  fa-2x"></i></a>
                    <a href="#"><i class="fab fa-behance fa-2x"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g fa-2x"></i></a>
                    <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

<?php wp_footer(); ?>
</body>

</html>