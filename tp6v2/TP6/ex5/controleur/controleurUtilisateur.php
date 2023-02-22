<?php
include("modele/utilisateur.php");
include("vue/menu.html");
$titre = "lse utilisateurs";

$requete = "SELECT * FROM utilisateurs";
$resultat = Connexion::pdo()->query($requete);
$resultat->setFetchmode(PDO::FETCH_CLASS,"utilisateur");
$tableau=$resultat->fetchAll();
include("vue/utilisateur/lesUtilisateurs.php");
Utilisateur::getAllUtilisateur();
 
include("vue/debut.php");

include("vue/fin.php");

?>