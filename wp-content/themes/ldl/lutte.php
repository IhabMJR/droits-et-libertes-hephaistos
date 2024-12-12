<?php
/*
Template Name: Lutte
Template Post Type: lutte
*/

get_header();

if (have_posts()):
  while (have_posts()):
    the_post();
    ?>

    <div class="hero-nouvelle">
      <div class="fond"></div>
      <div class="contenu">
        <h2>
          <?php the_title(); ?>
        </h2>
        <img class="img-nouvelle" src=<?php the_post_thumbnail_url(); ?> />
        <p>
          <?php the_field('lutte-description'); ?>
        </p>
      </div>
    </div>

    <div class="contenu-nouvelle">
      <?php the_field('lutte-article'); ?>
      <br/><a href=<?php echo esc_url(home_url('/luttes')); ?>><button class="toutes-nouvelles">Retour</button></a>
    </div>
    </main>

    <?php
  endwhile;
endif;
get_footer();
?>