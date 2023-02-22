<?php

include("config/connexion.php");
Connexion ::connect();
$controleur = "controleurVoiture";
$temp1="controleurUtilisateur";
$action = "lireVoitures";
/*
if($_GET["controleur"]==$temp1)
{
	$controleur = "controleurUtilisateur";
	//$action = "lireUtilisateurs";
}
if($_GET["action"]==lireUtilisateurs)
{
	$action = "lireUtilisateurs";
}

*/

//--------------------------------------------

$tableauControleurs = ["controleurVoiture","controleurUtilisateur"];
$actionPardefault = array(
"controleurVoiture"=>"lireVoitures",
"controleurUtilisateur"=>"lireUtilisateurs"
)

if(in_array($_GET["controleur"],$actionPardefault))
{
	$controleur = $_GET["controleur"];
	$action=$actionPardefault[$controleur];
}

require_once("controleur/$controleur.php");
$controleur::$action();

?>