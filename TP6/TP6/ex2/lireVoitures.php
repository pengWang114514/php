<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>toutes les voitures</title>
	<link rel="stylesheet" href="css/styleMenu.css">
</head>
<body>
	<?php
		// insertion du menu
		include("menu.html");

		// insertion des classes Voiture et connexion
    require_once("modele/voiture.php");
		require_once("config/connexion.php");

    // appel de la méthode de connexion
		Connexion::connect();

    // récupération des voitures
		$tab_v = Voiture::getAllVoitures();

		// affichage du tableau
		foreach ($tab_v as $v) {
			$v->afficher();
		}
	?>
</body>
</html>
