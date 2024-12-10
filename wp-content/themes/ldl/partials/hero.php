<div class="hero">
    <!-- Swiper -->
    <div class="swiper-hero">
        <div class="conteneur">
            <div class="titre">
                <h1>
                    <?php the_field('titre_hero'); ?>
                </h1>
                <p>
                    <?php the_field('description_hero'); ?>
                </p>
            </div>
        </div>
        <div class="revue">
            <img class="image" src="<?php bloginfo('template_url'); ?>/assets/images/livre.png" />
            <a href="#"><img class="btn-revue" src="<?php bloginfo('template_url'); ?>/assets/images/btn.png" /></a>
        </div>
        <!-- Slides -->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/swiper_manifestation.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/swiper_immigration.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/swiper_police.jpg" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>