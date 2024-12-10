<?php
/**
 * 	Template Name: Liste des nouvelles
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php ?>

<!-- Section hero -->
<?php get_template_part('partials/hero'); ?>

<div class="wrapper">
  <!-- Bouton trier par -->
  <div class="btn_trier_par">
    <span>Trier par</span>
    <div class="trier_par_content">
      <a href="<?php echo esc_url(home_url('/index.php/nouvelles?dir=DESC')); ?>">Des plus récentes</a>
      <a href="<?php echo esc_url(home_url('/index.php/nouvelles?dir=ASC')); ?>">Des plus anciennes</a>
    </div>
  </div>

  <div class="news-hub-cards">
  </div>
  <div class="container_link_nouvelles">
    <a class="link_nouvelles" href="#">Voir plus de nouvelles</a>
  </div>

  <?php

  get_footer(); // Affiche footer.php 
  ?>