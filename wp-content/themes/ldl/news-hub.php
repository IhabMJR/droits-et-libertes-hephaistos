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

  <div class="news-hub-cards">
    <!-- Cartes -->
    <?php
    $args = array(
      'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if ($post_query->have_posts()) {
      while ($post_query->have_posts()) {
        $post_query->the_post();
        ?>
        <div class="news-hub-card" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
          <div class="titre">
            <p><span>
                <?// get the post object
                    global $post;

                    // pass post id
                    $categories = get_the_category($post->ID);

                    if (!empty($categories)) {
                      echo esc_html($categories[0]->name);
                    } ?>
              </span></p>
            <h3>
              <?php the_title(); ?>
            </h3>
          </div>
          <div class="details">
            <p><?php the_date(); ?></p>
          </div>
          <a href="<?php the_permalink(); ?>"><img class="btn-nouvelle"
              src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
        </div>
        <?php
      }
    }
    ?>

  </div>
  <div class="container_link_nouvelles">
    <a class="link_nouvelles">Toutes les nouvelles</a>
  </div>
</div>

<?php

get_footer(); // Affiche footer.php 
?>