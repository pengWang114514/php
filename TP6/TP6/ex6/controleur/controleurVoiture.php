<?php
// insertion du modèle Voiture
require_once("modele/voiture.php");

// définition du contrôleur Voiture
class ControleurVoiture {

  // la méthode de récupération et d'affichage de toutes les voitures
  public static function lireVoitures() {
    $titre = "toutes les voitures";
    $tab_v = Voiture::getAllVoitures();
    include("vue/debut.php");
    include("vue/menu.html");
    include("vue/voiture/lesVoitures.php");
    include("vue/fin.html");
  }

}
?>
