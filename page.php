<?php get_header(); ?>
<?php echo do_shortcode("[rev_slider alias='principal']"); ?>
    <main class="container row">
        <div class="space col-16"></div>
        <section class="Categories col-16 col-l-4">
            <h2>Categorias</h2>
            <?php get_sidebar() ?>
        </section>
        <section class=" col-16  col-l-12 row justify-between ">
            <div class="Category-title col-16 justify-center">
                <h1> <?php the_title(); ?></h1>
            </div>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content() ?>
            <?php endwhile; ?>
        </section>
    </main>
<?php get_footer();
