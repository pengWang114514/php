<?php
// insertion du modèle Voiture
require_once("modele/voiture.php");

// définition du contrôleur Voiture
class ControleurVoiture {

  // la méthode de récupération et d'affichage de toutes les voitures
  public static function lireVoitures() {
    $titre = "toutes les voitures";
    $tab_v = Voiture::getAllVoitures();
    // construction du tableau de liens pour l'affichage
    $tabAff = array();
    foreach($tab_v as $v) {
      $imm = $v->getImmatriculation();
      $lienDetails = "<a class='bouton' href=\"routeur.php?controleur=controleurVoiture&action=lireVoiture&immatriculation=$imm\"> détails </a>";
      $tabAff[] = "<div class='ligne'><div>voiture immatriculée $imm</div><div> $lienDetails</div></div>";
    }
    include("vue/debut.php");
    include("vue/menu.html");
    include("vue/voiture/lesVoitures.php");
    include("vue/fin.html");
  }

  // la méthode de récupération de la voiture
  // dont l'immatriculation est passée en GET
  public static function lireVoiture() {
    $titre = "une voiture";
    $i = $_GET["immatriculation"];
    $v = Voiture::getVoitureByImmat($i);
    include("vue/debut.php");
    include("vue/menu.html");
    if (!$v)
      include("vue/voiture/erreur.php");
    else
      include("vue/voiture/uneVoiture.php");
    include("vue/fin.html");
  }

}
?>
