<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex1</title>
    <link rel="icon" type="image/png" href="iconPHP.png">
  </head>
  <body>
    <h2>Ceci est la page générée par l'interprétation de ex1.php</h2>
    <?php
      $auj = getdate();
      echo "<pre>";
      print_r($auj);
      echo "</pre>";
      $lesMois = array(
        1 => "janvier", 2 => "février", 3 => "mars",
        4 => "avril", 5 => "mai", 6 => "juin",
        7 => "juillet", 8 => "août", 9 => "septembre",
        10 => "octobre", 11 => "novembre", 12 => "décembre"
      );
      $lesJours = array(
        1 => "lundi", 2 => "mardi", 3 => "mercredi", 4 => "jeudi",
        5 => "vendredi", 6 => "samedi", 7 => "dimanche"
      );

      $mois = $lesMois[$auj["mon"]];
      $jour = $lesJours[$auj["wday"]];
      $annee = $auj["year"];

      $h = date("H");
      $m = date("i");
      $s = date("s");
      $heure = $h."h ".$m."min ".$s."s";

      $u = get_current_user();
      echo "<p>l'utilisateur $u a demandé cette page le $jour $mois $annee à $heure</p>";

    ?>

  </body>
</html>
