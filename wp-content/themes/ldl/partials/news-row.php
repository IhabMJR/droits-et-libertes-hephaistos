<div class="contenant">
    <div class="actualites">
        <h2 class="titre_actualites">Actualités</h2>
        <div class="actualites__cartes">
            <!-- Slider main container -->
            <div class="swiper scroll">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    $args = array(
                        'post_type' => 'post'
                    );

                    $post_query = new WP_Query(['posts_per_page' => 3]);

                    if ($post_query->have_posts()) {
                        while ($post_query->have_posts()) {
                            $post_query->the_post();
                            ?>
                    <div class="swiper-slide carte" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        <div class="carte__titre">
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
                        <div class="carte__details">
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
            </div>
        </div>
        <a href=<?php echo site_url('/nouvelles'); ?>><button class="toutes-nouvelles">Toutes les nouvelles</button></a>
    </div>
</div>