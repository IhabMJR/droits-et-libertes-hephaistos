<?php

get_header(); // Affiche header.php
    ?>
    <!-- Section hero -->
    <?php get_template_part('partials/hero'); ?>
    <!-- Section Actualités -->
    <?php get_template_part('partials/news-row'); ?>

    <!-- Section Don -->
    <div class="contenant_bande_dons avant marquee" id="bandeDons">
      <span>je donne pour les droits humains * je donne pour les droits humains * je donne pour les droits humains
        *</span>
    </div>
    <div class="contenant_bande_dons derriere marquee" id="bandeDons"></div>

    <div class="contenu">
      <div class="dons">
        <div class="dons__texte">
          <p>
            Pour y arriver, il faut les faire
            <span class="rouge">connaître</span>. Les droits humains doivent
            <span class="rouge">rayonner</span> davantage!
          </p>
        </div>
        <div class="dons__btn">
          <form action="https://portail.liguedesdroits.ca/fr/don">
            <button>Je donne</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Section Luttes -->
    <div class="wrapper_luttes">
      <div class="luttes_cartes">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/lutte.png" class="img_lutte"
          alt="Image representing struggles" />
        <!-- Slider main container -->
        <div class="swiper luttes">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <?php
            $luttes = new WP_Query([
                'post_type' => 'lutte',
                'posts_per_page' => -1,
            ]);

            // Loop Through Posts
            if ($luttes->have_posts()):
              while ($luttes->have_posts()): $luttes->the_post(); ?>
                <!-- Slides -->
                <div class="swiper-slide text_container">
                  <h3 class="titre_lutte">Nos luttes</h3>
                  <h3 class="titre_lutte2"><?php the_field('lutte-title'); ?></h3>
                  <div class="para_lutte">
                    <p class="text_lutte"><?php the_field('lutte-description'); ?></p>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="link_lutte">Voir plus</a>
                </div>
            <?php
            endwhile;
            endif;
            ?>
          </div>
        </div>
        <div class="btn_container">
          <a class="button-next"><img class="btn-next btn-right" src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
          <a class="button-prev"><img class="btn-next btn-left" src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
        </div>
      </div>
    </div>


    <!-- Section Temoignages -->
    <div class="contenant_temoignages">
      <div class="temoignages">
        <h2 class="temoignages__titre">Témoignages</h2>
        <h2 class="temoignages__sous-titre">
          Ce que nos <span class="text-rouge">donneurs</span> ont à dire
        </h2>

        <!-- Swiper -->
        <div class="swiper-temoignages">
          <div class="swiper-wrapper">
          <?php
            $temoignages = new WP_Query([
                'post_type' => 'temoignage',
                'posts_per_page' => -1,
            ]);

            // Loop Through Posts
            if ($temoignages->have_posts()):
              while ($temoignages->have_posts()): $temoignages->the_post(); ?>
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="carte">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/quotation.png" class="carte__quotation"
                  alt="quotation" />
                <div class="carte__description">
                  <?php the_field('temoignage_description'); ?>
                </div>
                <div class="carte__titre">
                  <h3><?php the_field('temoignage_titre'); ?></h3>
                </div>
              </div>
            </div>
            <?php
            endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Section partenaire -->
    <div class="contenu_partenaire">
      <!-- Swiper -->
      <div class="swiper-partenaire">
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="carte-partenaire">
              <img class="img_partenaire" src="<?php bloginfo('template_url'); ?>/assets/images/aidejuridique_logo.jpeg" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carte-partenaire">
              <img class="img_partenaire" src="<?php bloginfo('template_url'); ?>/assets/images/casifq_logo.png" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carte-partenaire">
              <img class="img_partenaire" src="<?php bloginfo('template_url'); ?>/assets/images/bdsquebec-logo.jpg" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carte-partenaire">
              <img class="img_partenaire" src="<?php bloginfo('template_url'); ?>/assets/images/iclmg-csilc.jpg" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carte-partenaire">
              <img class="img_partenaire"
                src="<?php bloginfo('template_url'); ?>/assets/images/logo-echec-a-la-guerre.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>

  <?php 


get_footer(); // Affiche footer.php 
?>