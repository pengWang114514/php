<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TP5 - ex4 - les voitures</title>
</head>
<body>
	<?php
		// insertion des classes Voiture et connexion
    require_once("voiture.php");
		require_once("connexion.php");

    // appel de la méthode de connexion
		Connexion::connect();

    // récupération des voitures
		$tab_v = Voiture::getAllVoitures();

		// affichage du tableau
		//echo "<pre>"; print_r($tab_v); echo "</pre>";
    // construction en boucle des voitures avec affichage
		foreach ($tab_v as $v) {
			$v->afficher();
		}
	?>
</body>
</html>
