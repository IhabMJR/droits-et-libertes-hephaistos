<?php
/**
 * Template Name: Nouvelle
 * Template Post Type: post
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
if (have_posts()):
    // Si oui, bouclons au travers pour tous les afficher
    while (have_posts()):
        the_post();
        ?>

        <!-- Hero -->
        <div class="hero-nouvelle">
            <div class="fond"></div>
            <div class="contenu">
                <img class="nouvelle-dessin" src="./assets/images/dessin_lettre.png" />
                <p><?// get the post object
                        global $post;

                        // pass post id
                        $categories = get_the_category($post->ID);

                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        } ?> &nbsp; • &nbsp; <?php the_date(); ?></p>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <img class="img-nouvelle" src=<?php the_post_thumbnail_url(); ?> />
                <div class="btns-nouvelle">
                    <a>Nouvelle précédente</a>
                    <a>Nouvelle suivante</a>
                </div>
            </div>
        </div>

        <div class="contenu-nouvelle">
            <?php the_content(); ?>
        </div>
        </main>

        <!-- Bandeau articles similaires -->
        <div class="bande articles">
            <img src="./assets/images/banniere-nouvelle.png" class="bande_dons" alt="bande_dons" />
        </div>

    <?php endwhile;
    wp_reset_postdata(); // Fermeture de la boucle

else: // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>