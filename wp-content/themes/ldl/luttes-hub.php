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
    <div class="card_page_luttes">
        <h3 class="title_lutte">Droit à la santé</h3>
        <p class="description_lutte">
            En plus de l’accès à des soins de santé en temps opportun, le droit à
            la santé implique l’adoption de politiques gouvernementales agissant
            sur les déterminants sociaux de la santé ayant un impact sur la santé
            et la participation de la population à la prise de toute décision.
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">COVID-19</h3>
        <p class="description_lutte">
            Dès le 13 mars 2020, la Ligue des droits et libertés (LDL) s’est
            questionnée les nombreuses décisions prises par le gouvernement du
            Québec en ayant toujours en tête cette question : quels seront leurs
            impacts sur les droits humains ?
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">Droit d’association</h3>
        <p class="description_lutte">
            La protection et la promotion de la liberté d’association des groupes
            communautaires et des organisations sans but lucratif (OSBL) sont des
            enjeux de droits humains. En effet, le droit d’association participe à
            la réalisation de tous les droits humains en démocratie.
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">
            Droits des personnes en détention et enjeux carcéraux
        </h3>
        <p class="description_lutte">
            Au Québec, les violations des droits des personnes en détention sont
            pratique courante.
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">Droits économiques, sauciaux et culturels</h3>
        <p class="description_lutte">
            La LDL est solidaire des luttes pour le respect des droits
            économiques, sociaux et culturels (DESC) de tout le monde. Elle milite
            pour que les gouvernements prennent leurs responsabilités....
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">Droit des peuples autochtones</h3>
        <p class="description_lutte">
            La méconnaissance de la situation marquée par le colonialisme et le
            racisme dans laquelle continuent d’évoluer les peuples autochtones du
            Canada n’est pas sans conséquences sur les liens de solidarité qui
            sont essentiels à développer....
        </p>
        <a href="url">voir plus</a>
    </div>

    <div class="image_lutte_page">
        <img class="image_of_lutte" src="<?php bloginfo('template_url'); ?>/assets/images/lutte_main.jpg" />
    </div>

    <div class="card_page_luttes">
        <h3 class="title_lutte">Environnement</h3>
        <p class="description_lutte">
            L’ampleur des problèmes environnementaux auxquels l’humanité fait face
            soulève de nombreuses préoccupations du point de vue des droits
            humains.
        </p>
        <a class="link_page_luttes" href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">
            Liberté d’expression, droit de manifester et profilage politique
        </h3>
        <p class="description_lutte">
            La LDL dénonce les nombreuses atteintes à la liberté d’expression et
            au droit de manifester au Québec et au Canada.
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">Migration et réfugiés</h3>
        <p class="description_lutte">
            Une politique d’accueil des personnes réfugiées n’est ni une question
            de charité – comme on l’entend trop souvent dans le discours public –
            ni un calcul d’intérêt, c’est une question de droits fondamentaux.
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">
            Police et mécanismes de surveillance des pratiques policières
        </h3>
        <p></p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">Racisme, exclusion sociale et laïcité</h3>
        <p class="description_lutte">
            La LDL considère le racisme comme un problème structurel, auquel il
            nous faut apporter des réponses du même ordre. Elle apporte son
            soutien aux luttes contre le racisme....
        </p>
        <a href="url">voir plus</a>
    </div>
    <div class="card_page_luttes">
        <h3 class="title_lutte">
            Surveillance des populations et intelligence artificielle
        </h3>
        <p></p>
        <a href="url">voir plus</a>
    </div>
</div>
<?php

get_footer(); // Affiche footer.php 
?>