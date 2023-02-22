<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $titre;?></title>
    <link rel="stylesheet" href="css/styleMenu.css">
  </head>
  <body>

  <h>les voitures </h>
  
 
  
<?php
    include("menu.html");

/*echo "<a href="lireUtilisateurs.php"> lireUtilisateurs </a>";
echo "<a href="lireVoitures.php"> lireVoitures </a>";*/
//b. Inclure la classe Voiture et la classe Connexion
	include("modele/utilisateur.php");
	include("modele/voiture.php");
	include("config/connexion.php");

//require_once("connexion.php");
//require_once("voiture.php");
Connexion::connect();
//c. Créer une requête qui récupère toutes les voitures de la table
$requete = "SELECT * FROM voiture";
$resultat = Connexion::pdo()->query($requete);
$resultat->setFetchmode(PDO::FETCH_CLASS,"voiture");
$tableau=$resultat->fetchAll();
//d. Afficher dans le body le tableau résultat par une méthode print_r
echo "<pre>";
print_r($tableau);
echo "</pre>";

/*e. Dans une boucle parcourant ce tableau, afficher les voitures construites avec 
la méthode afficher(), présenter les voitures en les incluant dans une 
liste à puces.*/
/*foreach($tableau as $voiture){
	echo " <p>voiture {$voiture->getimmatriculation()}, de marque {$voiture->getMarque()},de couleur {$voiture->getCouleur()}</p>";
		}*/
	

//ex4
Voiture::getAllVoitures();


?>

</body>
</html>