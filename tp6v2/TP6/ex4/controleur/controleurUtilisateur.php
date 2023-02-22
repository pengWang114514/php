<?php
include("modele/utilisateur.php");
include("vue/menu.html");
$titre = "lse utilisateurs";

$requete = "SELECT * FROM voiture";
$resultat = Connexion::pdo()->query($requete);
$resultat->setFetchmode(PDO::FETCH_CLASS,"voiture");
$tableau=$resultat->fetchAll();
include("vue/utilisateur/lesUtilisateurs.php");
Utilisateur::getAllUtilisateur()();
 
include("vue/debut.php");

include("vue/fin.php");

?>