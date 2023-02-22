	<?php
		$titre = "tous les utilisateurs";

		// affichage du début du fichier html
		include("vue/debut.php");

		// insertion du menu
		include("vue/menu.html");

		// insertion des classes Utilisateur et connexion
    require_once("modele/utilisateur.php");
		require_once("config/connexion.php");

    // appel de la méthode de connexion
		Connexion::connect();

    // récupération des voitures
		$tab_u = Utilisateur::getAllUtilisateurs();

		// affichage des voitures
		include("vue/utilisateur/lesUtilisateurs.php");

		// affichage de la fin du fichier html
		include("vue/fin.html");
	?>
