<?php
include("modele/utilisateur.php");

class ControleurUtilisateur
{
	public static function lireUtilisateurs()
	{
		include("vue/menu.html");
		$titre = "lse utilisateurs";
		$tab_u=Utilisateur::getAllUtilisateur();
		
		include("vue/debut.php");
		include("vue/utilisateur/lesUtilisateurs.php");
		include("vue/fin.php");
	}
}


/*
$requete = "SELECT * FROM utilisateurs";
$resultat = Connexion::pdo()->query($requete);
$resultat->setFetchmode(PDO::FETCH_CLASS,"utilisateur");
$tableau=$resultat->fetchAll();
include("vue/utilisateur/lesUtilisateurs.php");
Utilisateur::getAllUtilisateur();
 
*/



?>