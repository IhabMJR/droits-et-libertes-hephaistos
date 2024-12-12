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
            <div class="fond">
                <div class="emoji"> <?php
                // Get the post object
                global $post;

                // Get the categories for the post
                $categories = get_the_category($post->ID);

                if (!empty($categories)) {
                    $category_name = esc_html($categories[0]->name);

                    // Check if the category is 'lettres ouvertes'
                    if ($category_name == 'Lettres ouvertes') {
                        echo '✉️ ';
                    } else if ($category_name == 'Communiqués') {
                        echo '🎤 ';
                    } else if ($category_name == 'Revue Droits et libertés') {
                        echo '📖 ';
                    } else if ($category_name == 'Nouvelles') {
                        echo '📰';
                    }
                }
                ?></div>
            </div>
            <div class="contenu">
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
                    <?php
                    // Nouvelle précédente
                    $prev_post = get_previous_post();

                    if ($prev_post):
                        $prev_post_url = get_permalink($prev_post->ID);
                        ?>
                        <a href="<?php echo esc_url($prev_post_url); ?>">
                            Nouvelle précédente
                        </a>
                    <?php else: ?>
                        <!-- Lien vide si aucunes autres nouvelles -->
                        <a href="#" class="disabled-link" aria-disabled="true">
                        </a>
                    <?php endif; ?>
                    <?php
                    // Nouvelle suivante
                    $next_post = get_next_post();

                    if ($next_post):
                        $next_post_url = get_permalink($next_post->ID);
                        ?>
                        <a href="<?php echo esc_url($next_post_url); ?>">
                            Nouvelle suivante
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="contenu-nouvelle">
            <?php the_content(); ?>
        </div>
        </main>

        <!-- Bande prochain article -->
        <?php
        // Nouvelle précédente
        $next_post = get_next_post();

        if ($next_post):
            ?>
            <div class="bande-prochain-article">
                <div class="contenant_bande_dons avant marquee" id="prochainArticle">
                    <span>prochain article * prochain article * prochain article
                        *</span>
                </div>
                <div class="contenant_bande_dons derriere marquee" id="bandeDons"></div>
            </div>
        <?php else: ?>
            <!-- Lien vide si aucunes autres nouvelles -->
        <?php endif; ?>

        <div class="news-hub-cards next-post">
            <?php
            // Get the next post in the same category or order
            $next_post = get_next_post();

            if ($next_post):
                // Get the URL and other necessary details for the next post
                $next_post_url = get_permalink($next_post->ID);
                $next_post_title = get_the_title($next_post->ID);
                $next_post_thumbnail_url = get_the_post_thumbnail_url($next_post->ID, 'full'); // Change 'full' to any image size you prefer
                $next_post_date = get_the_date('', $next_post->ID);
                $next_post_category = get_the_category($next_post->ID);

                // Get the first category's name if available
                $next_post_category_name = !empty($next_post_category) ? esc_html($next_post_category[0]->name) : '';
                ?>
                <div class="news-hub-card" style="background-image: url(<?php echo esc_url($next_post_thumbnail_url); ?>)"
                    data-url="<?php echo esc_url($next_post_url); ?>">
                    <div class="titre">
                        <p><span><?php echo $next_post_category_name; ?></span></p>
                        <h3><?php echo esc_html($next_post_title); ?></h3>
                    </div>
                    <div class="details">
                        <p><?php echo esc_html($next_post_date); ?></p> <!-- Format date -->
                    </div>
                </div>
                <script>
                    document.querySelector(".news-hub-card").addEventListener("click", function () {
                        const postUrl = this.getAttribute('data-url');
                        window.location.href = postUrl;
                    });
                </script>
            <?php endif; ?>
        </div>


    <?php endwhile;
    wp_reset_postdata(); // Fermeture de la boucle

else: // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>