<?php 
    get_header();

    while(have_posts()) {
        the_post(); ?>
         <!-- about -->
         <img class="immagineBlogBig" src="<?php the_field('immagine_blog'); ?>" alt="">
  </div>

  <main class="main__project">

    <div class="main__project--info">
        <p><?php the_time('N M Y'); ?></p>
        <p><?php echo get_the_category_list(', ')?></p>
        <p><?php the_author(); ?></p>
    </div>
    <div class="main__project--content">
        <h2><?php the_title(); ?></h2>
        <p>
          <?php the_content(); ?>
        </p>
        <img class="immagineBlogMedia" src="<?php the_field('immagine_media_blog'); ?>" alt="">
        <br>
        <br>
        
        <img src="img/unaVolta-bg.jpg" alt="" width="80%" height="auto">
        <br>
        <br>
        
  </main>
    <?php }

    get_footer();
?>