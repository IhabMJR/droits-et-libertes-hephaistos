<!-- Accueil -->
# Accueil

## TYPE DE CONTENU (POST TYPE): Page

## MODÈLE (TEMPLATE): home.php

## COMPOSANTES

### NOM DU PARTIAL: infinite-strip.php (+ page d'une nouvelle, 404)
#### CHAMPS PERSONNALISÉS
 - texte (text)

### NOM DU PARTIAL: hero.php (+ liste des nouvelles, liste des luttes, équipe, à propos)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)
 - images (gallery)

### NOM DU PARTIAL: news-swiper.php (+ liste des nouvelles, page d'une nouvelle)

### NOM DU PARTIAL: lutte-extrait.php (+ liste des luttes)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)

<!-- Liste des nouvelles -->
# Liste des nouvelles

## TYPE DE CONTENU (POST TYPE): Page

## MODÈLE (TEMPLATE): news-hub.php

## COMPOSANTES

### NOM DU PARTIAL: hero.php (+ accueil, liste des luttes, équipe, à propos)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)
 - images (gallery)

<!-- Page d'une nouvelle -->
# Page d'une nouvelle

## TYPE DE CONTENU (POST TYPE) : Article (Post)

## MODÈLE (TEMPLATE): news-article.php

## COMPOSANTES

### NOM DU PARTIAL: infinite-strip.php (+ accueil, 404)
#### CHAMPS PERSONNALISÉS
 - texte (text)

<!-- Liste des luttes -->
# Liste des luttes

## TYPE DE CONTENU (POST TYPE) : Page

## MODÈLE (TEMPLATE): luttes-hub.php

## COMPOSANTES

### NOM DU PARTIAL: hero.php (+ accueil, liste des nouvelles, équipe, à propos)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)
 - images (gallery)

### NOM DU PARTIAL: lutte-extrait.php (+ accueil)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)

<!-- Page d'une lutte -->
# Page d'une lutte

## TYPE DE CONTENU (POST TYPE) : Lutte (Post)

## MODÈLE (TEMPLATE): lutte.php

<!-- Équipe -->
# Équipe

## TYPE DE CONTENU (POST TYPE) : Page

## MODÈLE (TEMPLATE) : team.php

# COMPOSANTES

### NOM DU PARTIAL: description.php (+ à propos)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)

### NOM DU PARTIAL: hero.php (+ accueil, liste des nouvelles, liste des luttes, à propos)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)
 - images (gallery)

<!-- À propos -->
# À propos

## TYPE DE CONTENU (POST TYPE) : Page

## MODÈLE (TEMPLATE) : about.php

## COMPOSANTES

### NOM DU PARTIAL: description.php (+ équipe)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)

### NOM DU PARTIAL: hero.php (+ accueil, liste des nouvelles, liste des luttes, équipe)
#### CHAMPS PERSONNALISÉS
 - titre (text)
 - description (text area)
 - images (gallery)

<!-- Nous joindre -->
# Nous joindre

## TYPE DE CONTENU (POST TYPE) : Page

## MODÈLE (TEMPLATE) : contact-us.php

<!-- Erreur 404 -->
# Erreur 404

## TYPE DE CONTENU (POST TYPE) : Page

## MODÈLE (TEMPLATE) : 404.php

## COMPOSANTES

### NOM DU PARTIAL: infinite-strip.php (+ accueil, page d'une nouvelle)
#### CHAMPS PERSONNALISÉS
 - texte (text)

