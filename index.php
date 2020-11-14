<?php get_header(); ?>
<main>


    <h2>Articoli</h2>
    <section class="projects">
        <article class="projects__container">
        <?php
        while(have_posts()) {
            the_post(); ?>

            <div class="projects__container__single">
                <img src="<?php the_field('immagine_blog'); ?>" alt="hytta project website img" width="100%" height="auto">
                
            <a href="<?php the_permalink(); ?>"><h4><?php the_title();?></h4></a>
            <p class="ceraUnaVoltaCat"><?php echo get_the_category_list(', ')?></p>

            <p>
                <?php if(has_excerpt()){
                echo get_the_excerpt();
                } else {
                    echo wp_trim_words(get_the_content(), 20);
                }?>
            </p>

                <div class="article-info">
                <p><?php the_time('M Y'); ?></p>
                <p><?php the_author(); ?></p>
                </div>
            </div>

        <?php }
        ?>
        </article>
    </section>
    
</main>

<?php get_footer();?>