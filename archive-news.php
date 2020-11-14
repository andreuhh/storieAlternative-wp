<?php get_header(); ?>


<main class="proj-overview">
<h2>News</h2>
<section class="homeDescription homeDescription--event">
      <p>
        <strong>Storie in cammino.</strong> Nel corso dei nostri incontri vi porteremo in giorno
        per la città di Milano, in luoghi più o meno conosciuti, per riscoprire la realtà
        che ci circonda attraverso la scrittura. Avremo tempo di soffermarci sui dettagli e di realizzare ognuno un testo originale,
        scambiandoci suggestioni, consigli, letture.
      </p> 
</section>

    <section class="blog">
    <?php  
      while(have_posts()) {
      the_post(); ?>
      <article class="blog__container">

<div class="blog__container__single">
  <img src="<?php the_field('immagine_smallnews'); ?>" alt="flutter img" width="100%" height="auto"> 
  <div class="blog__container__single--container">
    
    <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>

    <p>
    <?php if(has_excerpt()){
          echo get_the_excerpt();
          } else {
              echo wp_trim_words(get_the_content(), 20);
          }?>
    </p>

    <p class="date">October 2020</p>
    
  </div>   
</div>

</article>
     
      
        <?php }
    ?>
    </section>
</main>     
    

  <p class="page-num"><?php echo paginate_links(); ?></p>
  
 <?php get_footer();?>