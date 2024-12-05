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
      <p>Des plus récentes</p>
      <p>Des plus anciennes</p>
    </div>
  </div>

  <div class="actualites__cartes">
    <div class="carte_principale">
      <div class="carte_principale__titre">
        <p><span>Lettres ouvertes</span></p>
        <h3>
          Le Canada doit stopper de façon urgente l’exportation
          d’armes à destination d’Israël
        </h3>
      </div>
      <div class="carte_principale__details">
        <p>27 août 2024</p>
      </div>
      <a href="#"><img class="btn-nouvelle" src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
    </div>

    <!-- Slider main container -->
    <div class="swiper scroll liste">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide carte">
          <div class="carte__titre">
            <p><span>Lettres ouvertes</span></p>
            <h3>
              Le Canada doit stopper de façon urgente l’exportation
              d’armes à destination d’Israël
            </h3>
          </div>
          <div class="carte__details">
            <p>27 août 2024</p>
          </div>
          <a href="#"><img class="btn-nouvelle" src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
        </div>
        <div class="swiper-slide carte">
          <div class="carte__titre">
            <p><span>Lettres ouvertes</span></p>
            <h3>
              Le Canada doit stopper de façon urgente l’exportation
              d’armes à destination d’Israël
            </h3>
          </div>
          <div class="carte__details">
            <p>27 août 2024</p>
          </div>
          <a href="#"><img class="btn-nouvelle" src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
        </div>
        <div class="swiper-slide carte">
          <div class="carte__titre">
            <p><span>Lettres ouvertes</span></p>
            <h3>
              Le Canada doit stopper de façon urgente l’exportation
              d’armes à destination d’Israël
            </h3>
          </div>
          <div class="carte__details">
            <p>27 août 2024</p>
          </div>
          <a href="#"><img class="btn-nouvelle" src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container_link_nouvelles">
    <a class="link_nouvelles">Toutes les nouvelles</a>
  </div>
</div>

<?php

get_footer(); // Affiche footer.php 
?>