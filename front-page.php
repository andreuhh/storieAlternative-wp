<?php get_header() ?>
<div class="hero">
    <div class="hero__content">
        <h1>Storie alternative <span></span></h1>
        <div class="intro">
          <h3>Una mappa fatta di storie</h3>
          <h3 class="typing"></h3>
        </div>
    </div>
  </div>

  <main>

    <h2>Il progetto</h2>
    <section class="homeDescription">
      <p>
        Storie Alternative è una comunità digitale che raccoglie storie, 
        le vostre, per metterle insieme all’interno di una mappa nella quale poter navigare, 
        scrivere, condividere. La nostra idea è che ogni luogo ha la sua storia, o forse più di una. 
        L’intento è quello di costruire un archivio che possa arricchire la nostra esperienza quotidiana 
        della città e quella delle persone che ogni giorno arrivano a visitarla. 
        Ognuno di noi contribuisce ogni giorno a raccontare la storia della città in 
        modo unico e personale: attraverso parole, fotografie, disegni, verità o bugie.
        <span><a class="showMore" href="">Scopri di più</a></span>
      </p>
      
    </section>

    <h2 class="categoryTitle">Categorie</h2>
    <div class="main__service">
          <div class="main__service__items">
              <div class="iconCategory iconCategory--cammino"></div>
              <h5>In Cammino</h5>
              <p>Camminate attraverso piazze strade e giardini.</p>
          </div>
          <div class="main__service__items">
            <div class="iconCategory iconCategory--sculture"></div>
            <h5>Strutture e Sculture</h5>
              <p>Racconti architetture e arte in città.</p>
          </div>
          <div class="main__service__items">
            <div class="iconCategory iconCategory--incontri"></div>
            <h5>Incontri e scontri</h5>
              <p>Racconti di persone, animali oaltre creature che popolano la città.</p>
          </div>
    </div>

    <div class="main__service">
      <div class="main__service__items">
          <div class="iconCategory iconCategory--unaVolta"></div>
          <h5>C'era una volta</h5>
          <p>La milano di Ieri attraverso curiosità o aneddoti storici.</p>
      </div>
      <div class="main__service__items">
        <div class="iconCategory iconCategory--falsePiste"></div>
        <h5>False piste</h5>
          <p>Storie di luoghi e creature che potrebbero non essere reali.</p>
      </div>

      <!-- THIS ITEM IS NOT VISIBLE -->
      <div class="main__service__items"></div>

    </div>

    <h2>Ultimi articoli</h2>
    <section class="projects">

      <article class="projects__container">
        <div class="projects__container__single">
            <img src="<?php echo get_theme_file_uri('img/senzamemoria-sm.jpg')?>" alt="hytta project website img" width="100%" height="auto">
            
          <a href="singleArticle.html"><h4>Lo spaccio dei poli</h4></a>
          <p class="ceraUnaVoltaCat">C'era una volta</p>
          <p>Oggi è un giorno arido. Il sole appiattisce ogni forma, la proietta sull'asfalto. 
            Evidenzia i tratti e li imprime nella memoria con una lucidità surreale. 
            Camminiamo uno accanto all'altro, 
            ma assolutamente distanti, senza dire una parola.</p>
            <div class="article-info">
              <p>data</p>
              <p>Nome autore</p>
            </div>
        </div>

        <div class="projects__container__single">
          <img src="<?php echo get_theme_file_uri('img/roccaforte-sm.jpg')?>" alt="image acme project" width="100%" height="auto">
          <a href="acme.html"><h4>La roccaforte di Milano</h4></a>
          <p class="inCamminoCat">In Cammino</p>
          <p>Via Romualdo Bonfadini. Lungo la strada si affacciano condomini 
            di cemento e villette nascoste dalle siepi. Poco più avanti un enorme 
            prato chiuso da una recinzione arrugginita: lavori in corso.
            Qui i lavori ci sono sempre stati.
          </p>
          <div class="article-info">
            <p>data</p>
            <p>Nome autore</p>
          </div>
        </div>

      </article>

      <article class="projects__container">
        <div class="projects__container__single">
          <img src="<?php echo get_theme_file_uri('img/paglib-sm.jpg')?>" alt="resort with poll" width="100%" height="auto">
          <a href="reactresort.html"><h4>Tra le pagine dei libri</h4></a>
          <p class="incontriScontriCat">Incontri e scontri</p>
          <p>Me ne stavo lì, al piano di sopra, dove ci sono i libri usati, intento a 
            spulciare le pagine di un vecchio tomo di racconti per 
            bambini che mi aveva colpito per la crudezza dei disegni in copertina.
          </p>
          <div class="article-info">
            <p>data</p>
            <p>Nome autore</p>
          </div>
        </div>

        <div class="projects__container__single">
          <img src="<?php echo get_theme_file_uri('img/spacciopoli-sm.jpg')?>" alt="hytta project website img" width="100%" height="auto">
        <a href="hytta.html"><h4>Lo spaccio dei poli</h4></a>
        <p class="ceraUnaVoltaCat">C'era una volta</p>
        <p>Oggi è un giorno arido. Il sole appiattisce ogni forma, la proietta sull'asfalto. 
          Evidenzia i tratti e li imprime nella memoria con una lucidità surreale. 
          Camminiamo uno accanto all'altro, 
          ma assolutamente distanti, senza dire una parola.</p>
          <div class="article-info">
            <p>data</p>
            <p>Nome autore</p>
          </div>
      </div>
        
      </article>
 
      <a href="<?php echo site_url('/articoli')?>">
        <button aria-label="Shoe all project" class="btn--primary">Mostra tutti</button>
      </a>
    </section>

    <h2>News</h2>
    <section class="homeDescription homeDescription--event">
      <p>
        <strong>Storie in cammino.</strong> Nel corso dei nostri incontri vi porteremo in giorno
        per la città di Milano, in luoghi più o meno conosciuti, per riscoprire la realtà
        che ci circonda attraverso la scrittura. Avremo tempo di soffermarci sui dettagli e di realizzare ognubo untesto originale,
        scambiandoci suggestioni, consigli, letture.
      </p> 
    </section>

    <section class="blog">
      <article class="blog__container">

        <div class="blog__container__single">
          <img src="<?php echo get_theme_file_uri('img/spacciopoli-sm.jpg')?>" alt="flutter img" width="100%" height="auto"> 
          <div class="blog__container__single--container">
            
            <a href="art-flutter.html"><h4>Nuove prospettive</h4></a>
        
            <p>
              Ci ritroveremo nel parcheggio della Stazione di Lambrate.
              Dopo una breve passeggiata ci sederemo in cima alla Collinetta del Parco Lambro
              da cui potremo avere un anuova prospettiva sulla città.
            </p>

            <p class="date">October 2020</p>
            
          </div>   
        </div>

      </article>

      <article class="blog__container">

        <div class="blog__container__single">
          <img src="<?php echo get_theme_file_uri('img/spacciopoli-sm.jpg')?>" alt="flutter img" width="100%" height="auto"> 
          <div class="blog__container__single--container">
            
            <a href="art-flutter.html"><h4>Nuove prospettive</h4></a>
        
            <p>
              Ci ritroveremo nel parcheggio della Stazione di Lambrate.
              Dopo una breve passeggiata ci sederemo in cima alla Collinetta del Parco Lambro
              da cui potremo avere un anuova prospettiva sulla città.
            </p>

            <p class="date">October 2020</p>
            
          </div>   
        </div>

      </article>
      
    </section>    

    <section class="homeDescription homeDescription--chiSiamo">
      <h2 class="categoryTitle">Chi siamo</h2>
      <p>
        Un gruppo di scrittori che si occupa di leggere e sistemare le vostre storie,
        in modo che possano essere condivise nella forma migliore e diventare fonte
        di ispirazione per chi desidera conoscere meglio la città di Milano.
        <span><a class="showMore" href="">Scopri di più</a></span>
      </p> 
    </section>

    <div class="main__service">
          <div class="main__service__items">
              <div class="iconCategory iconCategory--matteo"></div>
              <h5>Matteo Lorenzo Luisi</h5>
              <p>Fondatore</p>
          </div>
          <div class="main__service__items">
            <div class="iconCategory iconCategory--alessia"></div>
            <h5>Alessia Passalia Garro</h5>
              <p>Editor</p>
          </div>
          <div class="main__service__items">
            <div class="iconCategory iconCategory--incontri"></div>
            <h5>Tu</h5>
            <p>Non esitare ad inviare i tuoi racconti</p>
          </div>
    </div>
    
  </main>
  <?php get_footer() ?>