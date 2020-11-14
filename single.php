<?php 
    get_header();

    while(have_posts()) {
        the_post(); ?>
         <!-- about -->
         <div class="hero">
    <div class="hero__content"></div>
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
        <br>
        <br>
        
        <img src="img/unaVolta-bg.jpg" alt="" width="80%" height="auto">
        <br>
        <br>
        
  </main>
    <?php }

    get_footer();
?>