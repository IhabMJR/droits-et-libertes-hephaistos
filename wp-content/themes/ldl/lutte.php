<?php
/*
Template Name: Lutte
Template Post Type: lutte
*/

get_header();

if (have_posts()) : 
    while (have_posts()) : the_post(); 
?>

<section class="section_une_lutte">
        <article class="article_lutte">
          <img
            class="image_une_lutte"
            src="<?php the_field('lutte-image'); ?>"
          />
          <h2 class="titre_une_lutte">
            <?php the_field('lutte-title'); ?>
          </h2>
          <p class="description_une_lutte">
            <?php the_field('lutte-description'); ?>
          </p>
        </article>

        <article class="article_lutte_text">
            <?php the_field('lutte-article'); ?>
            <a href="<?php echo esc_url(home_url('/index.php/luttes'));?>" class="btn_une_lutte Retour_lutte">Retour</a>
        </article>
</section>

<?php
endwhile;
endif;
get_footer();
?>