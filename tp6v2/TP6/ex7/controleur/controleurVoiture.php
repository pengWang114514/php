<?php
include("modele/voiture.php");
class ControleurVoiture
{
	public static function lireVoitures()
	{
		include("vue/menu.html");
		$titre = "lse voitures";
		$tab_v = Voiture::getAllVoitures();
		include("vue/debut.php");
		include("vue/voiture/lesVoitures.php");
		include("vue/fin.php");
	}
}

/*
include("vue/menu.html");

$titre = "lse voitures";

$requete = "SELECT * FROM voiture";
$resultat = Connexion::pdo()->query($requete);
$resultat->setFetchmode(PDO::FETCH_CLASS,"voiture");
$tableau=$resultat->fetchAll();

include("vue/voiture/lesVoitures.php");
Voiture::getAllVoitures();
 
include("vue/debut.php");

include("vue/fin.php");
*/

?>