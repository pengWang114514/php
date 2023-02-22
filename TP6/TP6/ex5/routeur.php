<?php
	require_once("config/connexion.php");
	Connexion::connect();
  $controleur = "controleurVoiture";
  if (isset($_GET["controleur"])) {
    $controleur = $_GET["controleur"];
  }
  require_once("controleur/$controleur.php");
?>
