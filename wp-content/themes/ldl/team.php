<?php
/**
 * 	Template Name: Équipe
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php ?>

<!-- modal -->
<div class="modal_equipe">
    <div class="modal_equipe_fond">
        <h3 class="modal_equipe_fond_titre" data-member-title="memberTitle">Lorem Ipsum</h3>
        <p class="modal_equipe_fond_texte" data-member-description="memberDescription">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur faucibus purus, quis iaculis
            nisl sollicitudin non. Quisque ultrices ornare leo, volutpat aliquet magna ullamcorper quis.
            Pellentesque id venenatis tellus. Nulla vel lectus lacinia, fringilla sapien id, mollis lorem. Fusce nec
            mauris magna. Aenean tristique finibus neque ut scelerisque. Nam tristique massa quis libero porta
            imperdiet. Mauris sapien nibh, vulputate quis venenatis vitae, laoreet quis sem. Aenean porta diam sit
            amet nisl feugiat, nec fermentum odio mollis.
        </p>
    </div>
    <button class="modal_equipe_btn">Fermer</button>
</div>

<!-- Section hero -->
<?php get_template_part('partials/hero'); ?>

<!-- Section equipe -->
<div class="container_equipe">
    <h1 class="titre_equipe">Notre équipe</h1>
    <p class="description_equipe">
        La Ligue des droits et libertés est animée par une équipe passionnée et engagée qui se consacre à la
        défense des droits fondamentaux et des libertés au Québec et ailleurs. Composée de professionnels
        provenant de divers horizons, notre équipe conjugue expertise juridique, compétences en communication,
        et connaissances en science politique et en sociologie pour promouvoir et défendre les valeurs de
        justice sociale, d'égalité, et de respect des droits humains.
        <br><br>
        Chaque membre de la Ligue contribue, par son travail et son dévouement, à informer et mobiliser le
        public, tout en assurant une veille rigoureuse des enjeux contemporains. Nous croyons que le respect des
        droits et des libertés passe par une sensibilisation et une solidarité actives, et nous œuvrons ensemble
        pour bâtir un avenir plus équitable pour tous.
    </p>

    <!-- Slider main container -->
    <div class="swiper equipe">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper equipe">
        <?php
            $members = new WP_Query([
                'post_type' => 'member',
                'posts_per_page' => -1,
            ]);
            // Loop Through Posts
            if ($members->have_posts()):
              while ($members->have_posts()): $members->the_post(); ?>
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="membre_equipe" style="background-image: url(<?php the_field('member_image'); ?>)" data-member-title="<?php the_field('member_title'); ?>" data-member-description="<?php the_field('member_description'); ?>">
                    <div class="membre_equipe_nom">
                        <p><span><?php the_field('member_title'); ?></span></p>
                        <h3><?php the_field('member_role'); ?></h3>
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
<?php

get_footer(); // Affiche footer.php 
?>