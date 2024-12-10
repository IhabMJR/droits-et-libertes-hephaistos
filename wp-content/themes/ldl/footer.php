<?php
/*-----------------------------------------------------------------------------------*/
/* Affiche le pied de page (Footer) sur toutes vos pages
   /*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer class="footer">
	<div class="overall-container">
		<div class="grid-2 contenu-footer">
			<a href="<?php echo esc_url(home_url('/')); // Lien vers la page d'accueil ?>">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/ldl-logo.png" class="logo-footer item1" />
			</a>
		</div>
		<div class="grid-3 contenu-footer">
			<a
				href="https://www.google.ca/maps/place/Ligue+des+droits+et+libert%C3%A9s/@45.5289331,-73.6258925,16z/data=!3m2!4b1!5s0x4cc9190b3bcb9635:0x2c9f5c61f45aca94!4m6!3m5!1s0x4cc919118cc021a9:0xfd06a7cbd0a48343!8m2!3d45.5289294!4d-73.6233176!16s%2Fg%2F1vn18448?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D">
				<p class="text-adresse item2">469 Jean-Talon Ouest, bureau 105</p>
			</a>
			<p class="text-adresse item3">Montréal,Québec H3N 1R4</p>
			<p class="text-contact item4">Tél: 514 849-7717</p>
			<p class="text-contact item5">Cell, médias: 514 715-7727</p>
			<p class="text-contact item6">info@liguedesdroits.ca</p>
		</div>
		<div class="grid contenu-footer">
			<form action="https://portail.liguedesdroits.ca/fr/don">
				<button class="btn-don-footer">
					<p class="text-don-footer">Faire un don</p>
				</button>
			</form>
			<img src="<?php bloginfo('template_url'); ?>/assets/images/fleche.png" class="arrow" />
		</div>
	</div>
	<p class="ligne"></p>
	<p class="text-copyright">©2024 Ligue des droit et libertés Héphaïstos</p>
	<p class="grid_icon contenant_icon">
		<a href="https://www.facebook.com/LigueDesDroitsEtLibertes/">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/facebook_icon.png" class="icon icon1" />
		</a>
		<a href="https://www.instagram.com/liguedesdroits/?hl=fr">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/IG_icon.png" class="icon icon2" />
		</a>
		<a href="https://x.com/i/flow/login?redirect_after_login=%2Fliguedesdroits">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/twitter_icon.png" class="icon icon3" />
		</a>
		<a href="https://fr.linkedin.com/company/liguedesdroits">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/in_icon.png" class="icon icon4" />
		</a>
		<a href="https://www.youtube.com/channel/UCiLRHd4Dalx_WmrMMgiwyfA">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/yt_icon.png" class="icon icon5" />
		</a>
	</p>
</footer>

<?php wp_footer();
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>

</html>