<?php
// insertion du modèle Utilisateur
require_once("modele/utilisateur.php");

// définition du contrôleur Utilisateur
class ControleurUtilisateur {

  // la méthode de récupération et d'affichage de tous les utilisateurs
  public static function lireUtilisateurs() {
    $titre = "tous les utilisateurs";
    $tab_u = Utilisateur::getAllUtilisateurs();
    // construction du tableau de liens pour l'affichage
    $tabAff = array();
    foreach($tab_u as $u) {
      $log = $u->getLogin();
      $lienDetails = "<a class='bouton' href=\"routeur.php?controleur=controleurUtilisateur&action=lireUtilisateur&login=$log\"> détails </a>";
      $tabAff[] = "<div class='ligne'><div>utilisateur $log</div><div> $lienDetails</div></div>";
    }
    include("vue/debut.php");
    include("vue/menu.html");
    include("vue/utilisateur/lesUtilisateurs.php");
    include("vue/fin.html");
  }

  // la méthode de récupération de l'utilisateur
  // dont le login est passé en GET
  public static function lireUtilisateur() {
    $titre = "un utilisateur";
    $l = $_GET["login"];
    $u = Utilisateur::getUtilisateurByLogin($l);
    include("vue/debut.php");
    include("vue/menu.html");
    if (!$u)
      include("vue/utilisateur/erreur.php");
    else
      include("vue/utilisateur/unUtilisateur.php");
    include("vue/fin.html");
  }

}
?>
