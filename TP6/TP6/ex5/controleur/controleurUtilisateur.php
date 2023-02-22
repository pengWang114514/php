<?php
  require_once("modele/utilisateur.php");
  $titre = "tous les utilisateurs";
  $tab_u = Utilisateur::getAllUtilisateurs();
  include("vue/debut.php");
  include("vue/menu.html");
  include("vue/utilisateur/lesUtilisateurs.php");
  include("vue/fin.html");
?>
