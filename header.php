<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Guffi Andrea Developer Website">
    <title>Storie Alternative</title>
    <!-- WP HEAD SCRIPTS -->
    
	<?php
	/**
	 * the wp_head() function lets WordPress execute all the pre-body operations including the injection of important styles and scripts.
	 * This function call should always be inside your <head> tag
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/wp_head/
	 */
	wp_head();
	?>
</head>
<body>

  <!-- navbar -->
  <nav class="nav" id="nav">
    <div class="nav-center">
      <!-- nav header -->
      <div class="nav-header">
        <div class="logo">
          <a href="<?php echo site_url('/')?>">
            <img src="<?php echo get_theme_file_uri('img/logo-single.png')?>" alt="logo" width="100" height="auto">
          </a> 
        </div>
        
        <button class="nav-btn" id="nav-btn">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <!-- nav-links -->
      <ul class="nav-links">
        <li>
          <a <?php if(is_page('articoli')) echo'class="active"'?> href="<?php echo site_url('/articoli')?>">Articoli</a>
        </li>
        <li>
          <a <?php if(is_page('mappe')) echo'class="active"'?> href="<?php echo site_url('/mappe')?>">Mappe</a>
        </li>
        <li>
          <a <?php if(is_page('scrivimi')) echo'class="active"'?> href="<?php echo site_url('/scrivimi')?>">Scrivi-Mi</a>
        </li>
        <li>
          <a <?php if(is_page('chisiamo')) echo'class="active"'?> href="<?php echo site_url('/chisiamo')?>">Chi siamo</a>
        </li> 
        <li>
          <a <?php if(is_page('news')) echo'class="active"'?> href="<?php echo site_url('/news')?>">News</a>
        </li> 
      </ul>
    </div>
  </nav>
  <!-- end of navbar -->
  <!-- sidebar -->
  <aside class="sidebar" id="sidebar">
    <div>
      <button class="close-btn" id="close-btn">
        <i class="fas fa-times"></i>
      </button>
      <!-- nav-links -->
      <ul class="sidebar-links">
          <a href="about.html">Articoli</a>
        </li>
        <li>
          <a href="projects.html">Mappe</a>
        </li>
        <li>
          <a href="articles.html">Scrivi-Mi</a>
        </li>
        <li>
          <a href="contacts.html">Chi siamo</a>
        </li> 
        <li>
          <a href="news.html">News</a>
        </li>
      </ul>
      <!-- social icons -->
      <ul class="social-icons ">
       
        <li>
          <a href="https://facebook" class="social-icon mobile">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/andrea.guffi/" class="social-icon mobile">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </aside>