  
	<?php 
	$titre="les utilisateur";
	include("vue/debut.php");
    include("vue/menu.html");
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
	/*echo "<pre>"; 
	//print_r($tableau); 
	foreach($tableau as $value)
	{
		$value->afficher();
	}
	echo "</pre>";*/
	include("vue/utilisateur/lesUtilisateurs.php");

    Utilisateur::getAllUtilisateur();
	
	include("vue/fin.php");
	?>
 