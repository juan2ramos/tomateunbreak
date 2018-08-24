<?php get_header(); ?>
<?php echo do_shortcode("[rev_slider alias='memes']"); ?>
<?php $category = get_the_category();
?>
<?php echo $category[0]->name  ?>
    <main class="container row">
        <div class="space col-16"></div>
        <section class="Categories col-12 col-l-4">
            <h2>Categorias</h2>
            <?php get_sidebar() ?>
        </section>

        <section class="Posts col-16 col-l-12 row justify-between ">
            <div class="Category-title col-16 justify-center"><h1><?php single_cat_title(); ?></h1></div>
            <?php
            if (have_posts()) : ?>
                <?php
                while (have_posts()) : the_post(); ?>
                    <article class="col-16 col-m-8 col-l-5">
                        <a href="<?php the_permalink();?>">
                            <figure>
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="homepage">
                                <p><?php the_title() ?></p>
                            </figure>
                        </a>
                    </article>

                <?php endwhile;
            else: ?>
                <p></p>
            <?php endif; ?>
        </section>
        <div class="row is-full-width">
            <div class="col-4"></div>
            <ul class="Pagination col-16 col-l-12 row is-list-less justify-center">
                <!--   <li><<</li>-->
                 <li class="active">1</li>
                  <!--  <li>2</li>
                   <li>>></li>-->
             </ul>
         </div>
     </main>
<?php get_footer();
