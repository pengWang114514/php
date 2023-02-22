<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP5 - ex3.4</title>
    <link rel="stylesheet" href="styleFormulaire.css">
  </head>
  <body>

  <h>les Utilisateur </h>

  
	<?php 
    include("menu.html");
	include("modele/utilisateur.php");
	include("modele/voiture.php");
	include("config/connexion.php");
	//include_path = '.:/modele/utilisateur.php');
	//include_path = '.:/modele/voiture.php');
	//require_once ("modele.utilisateur.php");
	//require_once("modele.voiture.php");
	Connexion::connect();	
    $requete = "SELECT * FROM utilisateurs;";
	$resultat = Connexion::pdo()->query($requete);
	$resultat -> setFetchmode(PDO::FETCH_CLASS,"Utilisateur");
	$tableau = $resultat->fetchAll();
	echo "<pre>"; print_r($tableau); echo "</pre>";

    Utilisateur::getAllUtilisateur();
	
	
	?>
  </body>
</html>
