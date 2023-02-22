<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex3a</title>
  </head>
  <body>
    <h2>tableau des capitaux successifs</h2>
    <?php
      $taux = 5;
      $capital = array(10000);
      for($n = 0; $n < 14; $n++) {
        echo "<p>C[$n] = ".$capital[$n]." €</p>";
        $capital[$n+1] = floor($capital[$n] * (1 + $taux / 100));
      }
    ?>
  </body>
</html>
