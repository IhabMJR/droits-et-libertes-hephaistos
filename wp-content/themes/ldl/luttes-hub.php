<?php
/**
 * 	Template Name: Liste des luttes
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php ?>

<!-- Section hero -->
<?php get_template_part('partials/hero'); ?>

<img class="tache_partenaire_droit" src="<?php bloginfo('template_url'); ?>/assets/images/tache_partenaire_droit.png" />
<img class="tache_partenaire_gauche" src="<?php bloginfo('template_url'); ?>/assets/images/tache_partenaire_gauche.png" />
<div class="container_page_luttes">
    <?php $luttes = new WP_Query(['post_type' => 'lutte', 'posts_per_page' => -1,]);
    while ($luttes->have_posts()):
        $luttes->the_post(); ?>
        <div class="card_page_luttes">
            <h3 class="title_lutte"><?php the_field('lutte-title'); ?></h3>
            <p class="description_lutte">
                <?php the_field('lutte-description'); ?>
            </p>
            <a href="<?php the_permalink(); ?>">voir plus</a>
        </div>
    <?php endwhile ?>
    </div>
</div>
<?php

get_footer(); // Affiche footer.php 
?>