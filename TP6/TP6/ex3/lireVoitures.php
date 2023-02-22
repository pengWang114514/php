	<?php
		$titre = "tous les utilisateurs";

		// affichage du début du fichier html
		include("vue/debut.php");

		// insertion du menu
		include("vue/menu.html");

		// insertion des classes Voiture et connexion
    require_once("modele/voiture.php");
		require_once("config/connexion.php");

    // appel de la méthode de connexion
		Connexion::connect();

    // récupération des voitures
		$tab_v = Voiture::getAllVoitures();

		include("vue/voiture/lesVoitures.php");

		include("vue/fin.html");
	?>
