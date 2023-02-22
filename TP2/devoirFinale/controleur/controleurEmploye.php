<?php
// insertion du modèle employe
require_once("modele/employe.php");

// définition du contrôleur Employe
class ControleurEmploye {

  // la méthode de récupération et d'affichage de tous les employe
  public static function lireEmploye() {
    $titre = "tous les Employes";
    $tab_e = Employe::getAllEmploye();
    // construction du tableau de liens pour l'affichage
    $tabAff = array();
    foreach($tab_e as $e) {
      $log = $u->getLogin();
      $lienDetails = "<a class='bouton' href=\"routeur.php?controleur=controleurUtilisateur&action=lireUtilisateur&login=$log\"> détails </a>";
      $tabAff[] = "<div class='ligne'><div>employe $log</div><div> $lienDetails</div></div>";
    }
    include("vue/debut.php");
    include("vue/menu.html");
    include("vue/employe/lesemployes.php");
    include("vue/fin.html");
  }

  // la méthode de récupération de l'employe
  // dont le login est passé en GET
  public static function lireUtilisateur() {
    $titre = "un employe";
    $l = $_GET["login"];
    $e = Employe::getUtilisateurByLogin($l);
    include("vue/debut.php");
    include("vue/menu.html");
    if (!$e)
      include("vue/employe/erreur.php");
    else
      include("vue/employe/unUtilisateur.php");
    include("vue/fin.html");
  }

}
?>
