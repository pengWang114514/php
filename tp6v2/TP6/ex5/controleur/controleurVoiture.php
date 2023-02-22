<?php
include("modele/voiture.php");
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

?>