<?php
/*-----------------------------------------------------------------------------------*/
/* Affiche l'entête (Header) sur toutes vos pages
   /*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php bloginfo('name'); // Affiche le nom du blog ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
	</title>
	<?php
	// Tous les .css et .js sont chargés dans le fichier functions.php
	?>

	<?php wp_head();
	/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
			Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
			Vous pouvez la déplacer si désiré, mais garder là. */
	?>
</head>

<body <?php body_class();
/* Applique une classe contextuel sur le body
		ex: sur la page d'accueil vous aurez la classe "home"
		sur un article, "single postid-{ID}"
		etc. */
?>>

	<header class="main-header">
		<!-- bande -->
		<div class="bande_projet">
			<p class="text_bande"> Ce site est une refonte de celui de la Ligue des droits et libertés, dans un contexte
				scolaire. Pour accéder au site officiel, cliquez <a href="https://liguedesdroits.ca/">ici</a></p>
			<button class="close-btn">X</button>
		</div>
		<!-- Navbar -->
		<nav id="navbar1" class="navbar navbar-dark navbar-expand-xl fixed-top">
			<div class="container-fluid">
				<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav"
					aria-controls="mainNav" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/hamburger_menu.png"
						class="toggler-icon" />
				</button>

				<a class="navbar-brand" class="nav-link"
					href="<?php echo esc_url(home_url('/')); // Lien vers la page d'accueil ?>">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/ldl-logo.png" />
				</a>
				<img src="<?php bloginfo('template_url'); ?>/assets/images/nav_ligne.png" class="nav-ligne" />
				<div id="mainNav" class="collapse navbar-collapse">
					<?php
					// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu_class' => "navbar-nav",
						'list_item_class' => 'nav-item',
						'link_item_class' => 'nav-link'
					));
					?>
				</div>
				<a href="https://portail.liguedesdroits.ca/fr/don">
					<button class="don">Faire un don</button>
				</a>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
						data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						FR
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">EN</a>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<main><!-- Débute le contenu principal de notre site -->