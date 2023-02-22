<?php

include("config/connexion.php");
Connexion ::connect();
$controleur = "controleurVoiture";
$temp="controleurUtilisateur";
if($_GET["controleur"]==$temp)
{
	$controleur = "controleurUtilisateur";
}
require_once("controleur/$controleur.php");
?>