<?php
  require_once("modele/voiture.php");
  $titre = "toutes les voitures";
  $tab_v = Voiture::getAllVoitures();
  include("vue/debut.php");
  include("vue/menu.html");
  include("vue/voiture/lesVoitures.php");
  include("vue/fin.html");
?>
