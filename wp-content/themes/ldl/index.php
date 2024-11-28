<?php

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
if (have_posts()):
  // Si oui, bouclons au travers pour tous les afficher
  while (have_posts()):
    the_post();
    ?>
      <!-- Section hero -->
      <?php get_template_part('partials/hero'); ?>
      <!-- Section Actualités -->
      <div class="contenant">
        <div class="actualites">
          <h2 class="titre_actualites">Actualités</h2>
          <div class="actualites__cartes">
            <!-- Slider main container -->
            <div class="swiper scroll">
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
          <a href="./liste_nouvelles.html"><button class="toutes-nouvelles">Toutes les nouvelles</button></a>
        </div>
      </div>

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
            <button>Je donne</button>
          </div>
        </div>
      </div>

      <!-- Section Luttes -->
      <div class="wrapper_luttes">
        <div class="luttes_cartes">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/lutte.png" class="img_lutte" alt="Image representing struggles" />
          <!-- Slider main container -->
          <div class="swiper luttes">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide text_container">
                <h3 class="titre_lutte">Nos luttes</h3>
                <h3 class="titre_lutte2">Droit à la santé</h3>
                <div class="para_lutte">
                  <p class="text_lutte">
                    En plus de l’accès à des soins de santé en temps opportun,
                    le droit à la santé implique l’adoption de politiques
                    gouvernementales agissant sur les déterminants sociaux de la
                    santé ayant un impact sur la santé et la participation de la
                    population à la prise de toute décision.
                  </p>
                </div>
                <a class="link_lutte">Voir plus</a>
              </div>
              <div class="swiper-slide text_container">
                <h3 class="titre_lutte">Nos luttes</h3>
                <h3 class="titre_lutte2">COVID-19</h3>
                <div class="para_lutte">
                  <p class="text_lutte">Dès le 13 mars 2020, la Ligue des droits et libertés (LDL) s’est questionnée les
                    nombreuses décisions prises par le gouvernement du Québec en ayant toujours en tête cette question :
                    quels seront leurs impacts sur les droits humains ?</p>
                </div>
                <a class="link_lutte">Voir plus</a>
              </div>
              <div class="swiper-slide text_container">
                <h3 class="titre_lutte">Nos luttes</h3>
                <h3 class="titre_lutte2">Droit d’association</h3>
                <div class="para_lutte">
                  <p class="text_lutte">La protection et la promotion de la liberté d’association des groupes communautaires
                    et des organisations sans but lucratif (OSBL) sont des enjeux de droits humains. En effet, le droit
                    d’association participe à la réalisation de tous les droits humains en démocratie.</p>
                </div>
                <a class="link_lutte">Voir plus</a>
              </div>
            </div>
            <!-- If we need navigation buttons 
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>-->
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
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="carte">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/quotation.png" class="carte__quotation" alt="quotation" />
                  <div class="carte__description">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam eu convallis lacus."
                  </div>
                  <div class="carte__titre">
                    <h3>John Doe</h3>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="carte">
                  <div class="carte__description">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam eu convallis lacus."
                  </div>
                  <div class="carte__titre">
                    <h3>John Doe</h3>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="carte">
                  <div class="carte__description">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam eu convallis lacus."
                  </div>
                  <div class="carte__titre">
                    <h3>John Doe</h3>
                  </div>
                </div>
              </div>
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
                <img class="img_partenaire" src="<?php bloginfo('template_url'); ?>/assets/images/logo-echec-a-la-guerre.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  <?php endwhile;
  wp_reset_postdata(); // Fermeture de la boucle

else: // Si aucune page n'a été trouvée
  get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>