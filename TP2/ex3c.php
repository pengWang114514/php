<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex3a</title>
  </head>
  <body>
    <h2>dépassement d'un seuil donné</h2>
    <?php
      $taux = 5;
      if (isset($_GET["taux"]))
        $taux = $_GET["taux"];
      $seuil = 18000;
      if (isset($_GET["seuil"]))
        $seuil = $_GET["seuil"];
      $capitalInitial = 10000;
      if (isset($_GET["capitalInitial"]))
        $capitalInitial = $_GET["capitalInitial"];
      $n = 0;
      $capital = $capitalInitial;
      while($capital < $seuil) {
        $capital = floor($capital * (1 + $taux / 100));
        $n++;
      }
      echo "<p>seuil à atteindre : $seuil €</p>";
      echo "<p>capital initial : $capitalInitial €</p>";
      echo "<p>taux d'intérêts : $taux %</p>";
      echo "<p>capital en début d'année $n : $capital €</p>";
    ?>
  </body>
</html>
