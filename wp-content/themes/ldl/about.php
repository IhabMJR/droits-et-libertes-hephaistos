<?php
/**
 * 	Template Name: À propos
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php ?>

<!-- Section hero -->
<?php get_template_part('partials/hero'); ?>

<!-- Section notre mission -->
<div class="container_a_propos">
    <h1 class="titre_a_propos">Notre mission</h1>
    <p class="description_a_propos">
        Créée en 1963, la Ligue des droits et libertés (LDL) est un organisme dédié à la promotion, la défense
        et la sensibilisation à l'universalité, l'indivisibilité et l'interdépendance des droits énoncés dans la
        Charte internationale des droits de l'Homme. La LDL est affiliée à la Fédération internationale pour les
        droits humains (FIDH).
        <br><br>
        Depuis sa fondation, l'organisation s'adresse à l'ensemble de la population, tout en portant une
        attention particulière à des groupes potentiellement vulnérables dans divers contextes, comme les
        personnes réfugiées et immigrantes, les autochtones, les femmes, les personnes en situation de handicap
        et les bénéficiaires de l'aide sociale.
        <br><br>
        La LDL prend position et agit auprès des instances gouvernementales et autres, tant au niveau national
        qu'international, pour dénoncer les violations des droits de la personne. Elle mène aussi des activités
        d'information, de formation et de sensibilisation pour mieux faire connaître les enjeux liés aux droits
        humains dans les multiples dimensions de la vie en société.
    </p>
</div>
<?php

get_footer(); // Affiche footer.php 
?>