<?php
/**
 * 	Template Name: Nous joindre
 * 	Template Post Type: page
 */

get_header(); // Affiche header.php ?>

<!-- Section coordonnees -->
<div class="container_nous_joindre">
    <h1 class="titre_nous_joindre">Coordonnées</h1>
    <h2 class="sous_titre_nous_joindre">Adresse</h2>
    <div class="wrapper_nous_joindre">
        <p class="description_nous_joindre">
            469, Jean-Talon Ouest, bureau 105<br>
            Montréal (Québec) H3N 1R4
        </p>
    </div>
    <h2 class="sous_titre_nous_joindre">Courriel</h2>
    <div class="wrapper_nous_joindre">
        <p class="description_nous_joindre">
            <a href="mailto:info@liguedesdroits.ca">info@liguedesdroits.ca</a>
        </p>
    </div>
    <h2 class="sous_titre_nous_joindre">Contactez-nous</h2>
        <div class="wrapper_nous_joindre">
            <form action="mailto:info@liguedesdroits.ca" method="post" enctype="text/plain">    
            <div class="form_goupe_1">
                <p class="form_text">Nom:</p>
                <input  class="formulaire" type="text" name="nom" size="50">
            </div>
            <br>
            <div class="form_goupe_2">
                <p class="form_text">Courriel:</p>
                <input  class="formulaire" type="text" name="courriel" size="50">
            </div>
            <br>
            <div class="form_goupe_3">
                <p class="form_text">Message:</p>
                <textarea type="text" name="message"  rows="6" cols="130vw"></textarea><br><br>
                <input class="btn_nous_joindre" type="submit" value="Send">
            </div>
        </form>
    </div>
</div>
<?php

get_footer(); // Affiche footer.php 
?>