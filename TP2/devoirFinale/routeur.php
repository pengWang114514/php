<?php
	require_once("config/connexion.php");
	Connexion::connect();
  $controleur = "controleurVoiture";
	$action = "lireVoitures";
	$tableauControleurs = ["controleurVoiture","controleurEmploye"];
	$actionParDefaut = array(
		"controleurVoiture" => "lireVoitures",
		"controleurEmploye" => "lireEmployes"
	);
  if (isset($_GET["controleur"]) && in_array($_GET["controleur"],$tableauControleurs)) {
    $controleur = $_GET["controleur"];
  }
	require_once("controleur/$controleur.php");
	if (isset($_GET["action"]) && in_array($_GET["action"],get_class_methods($controleur))) {
    $action = $_GET["action"];
  } else {
		$action = $actionParDefaut[$controleur];
	}

	$controleur::$action();
	
?>
