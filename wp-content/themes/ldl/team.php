<?php
/**
 * 	Template Name: Équipe
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php ?>

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
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="membre_equipe laurence">
                    <div class="membre_equipe_nom">
                        <p><span>Laurence Guénette</span></p>
                        <h3>
                            Coordonnatrice
                        </h3>
                    </div>
                    <div class="membre_equipe_details">
                        <p>514 849-7717, poste 3223</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="membre_equipe karina">
                    <div class="membre_equipe_nom">
                        <p><span>Karina Toupin</span></p>
                        <h3>
                            Responsable de l'administration et des finances
                        </h3>
                    </div>
                    <div class="membre_equipe_details">
                        <p>514 849-7717, poste 3221</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="membre_equipe elisabeth">
                    <div class="membre_equipe_nom">
                        <p><span>Elisabeth Dupuis</span></p>
                        <h3>
                            Responsable des communications
                        </h3>
                    </div>
                    <div class="membre_equipe_details">
                        <p>514 849-7717, poste 3224</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="membre_equipe lynda">
                    <div class="membre_equipe_nom">
                        <p><span>Lynda Khelil</span></p>
                        <h3>
                            Responsable de dossiers politiques
                        </h3>
                    </div>
                    <div class="membre_equipe_details">
                        <p>514 849-7717, poste 3222</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

get_footer(); // Affiche footer.php 
?>