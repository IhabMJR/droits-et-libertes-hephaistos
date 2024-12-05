<?php
/*-----------------------------------------------------------------------------------*/
/* Affiche le pied de page (Footer) sur toutes vos pages
   /*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="footer">
	<div class="overall-container">
		<div class="grid-2 contenu-footer">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/ldl-logo.png" class="logo-footer item1" />
		</div>
		<div class="grid-3 contenu-footer">
			<p class="text-adresse item2">469 Jean-Talon Ouest, bureau 105</p>
			<p class="text-adresse item3">Montréal,Québec H3N 1R4</p>
			<p class="text-contact item4">Tél: 514 849-7717</p>
			<p class="text-contact item5">Cell, médias: 514 715-7727</p>
			<p class="text-contact item6">info@liguedesdroits.ca</p>
		</div>
		<div class="grid contenu-footer">
			<button class="btn-don-footer">
				<p class="text-don-footer">Faire un don</p>
			</button>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/fleche.png" class="arrow" />
		</div>
	</div>
	<p class="ligne"></p>
	<p class="text-copyright">©2024 Ligue des droit et libertés Héphaïstos</p>
	<p class="grid_icon contenant_icon">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/facebook_icon.png" class="icon icon1" />
		<img src="<?php bloginfo('template_url'); ?>/assets/images/IG_icon.png" class="icon icon2" />
		<img src="<?php bloginfo('template_url'); ?>/assets/images/twitter_icon.png" class="icon icon3" />
		<img src="<?php bloginfo('template_url'); ?>/assets/images/in_icon.png" class="icon icon4" />
		<img src="<?php bloginfo('template_url'); ?>/assets/images/yt_icon.png" class="icon icon5" />
	</p>
</footer>

<?php wp_footer();
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>

</html>