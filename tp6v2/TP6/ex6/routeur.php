<?php

include("config/connexion.php");
Connexion ::connect();
$controleur = "controleurVoiture";
$temp1="controleurUtilisateur";
$action = "lireVoitures";

if($_GET["controleur"]==$temp1)
{
	$controleur = "controleurUtilisateur";
	//$action = "lireUtilisateurs";
}
if($_GET["action"]==lireUtilisateurs)
{
	$action = "lireUtilisateurs";
}

require_once("controleur/$controleur.php");
$controleur::$action();






?>