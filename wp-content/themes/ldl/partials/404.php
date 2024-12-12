<?php wp_head();
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
    Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
    Vous pouvez la déplacer si désiré, mais garder là. */
?>

<body class="error404">
  <div class="bande_devant marquee" id="latest-news">
    <span>404 * 404 * 404 *</span>
  </div>
  <div class="bande_derriere"></div>
  <div class="lien_error">
    <a href="<?php echo esc_url(home_url('/'));// Lien vers la page d'accueil ?>">Retour à l'accueil</a>
  </div>
</body>

<?php wp_footer();
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
   Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
   Vous pouvez la déplacer si désiré, mais garder là. */
?>