<?php
// insertion du modèle Utilisateur
require_once("modele/utilisateur.php");

// définition du contrôleur Utilisateur
class ControleurUtilisateur {

  // la méthode de récupération et d'affichage de tous les utilisateurs
  public static function lireUtilisateurs() {
    $titre = "tous les utilisateurs";
    $tab_u = Utilisateur::getAllUtilisateurs();
    include("vue/debut.php");
    include("vue/menu.html");
    include("vue/utilisateur/lesUtilisateurs.php");
    include("vue/fin.html");
  }

}
?>
