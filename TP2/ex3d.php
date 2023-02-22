<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex3a</title>
  </head>
  <body>
    <h2>calcul du taux minimum pour dépasser un seuil en un temps donné</h2>
    <?php
      $seuil = 18000;
      if (isset($_GET["seuil"]))
        $seuil = $_GET["seuil"];
      $capitalInitial = 10000;
      if (isset($_GET["capitalInitial"]))
        $capitalInitial = $_GET["capitalInitial"];
      $nbAnnees = 10;
      if (isset($_GET["nbAnnees"]))
        $nbAnnees = $_GET["nbAnnees"];
      $taux = 0;
      $capital = $capitalInitial;
      $resolu = false;
      while(!$resolu) {
        $taux += 0.1;
        $capital = $capitalInitial;
        for($i = 0; $i < $nbAnnees; $i++) {
          $capital = floor($capital * (1 + $taux / 100));
        }
        $resolu = ($capital > $seuil);
      }
      echo "<p>seuil à atteindre : $seuil €</p>";
      echo "<p>capital initial : $capitalInitial €</p>";
      echo "<p>nombre d'années : $nbAnnees</p>";
      echo "<p>taux d'intérêts calculé : $taux %</p>";
      echo "<p>capital en début d'année $nbAnnees : $capital €</p>";
    ?>
  </body>
</html>
