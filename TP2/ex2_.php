<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TP2 - ex1</title>
    <link rel="icon" type="image/png" href="iconPHP.png">
  </head>
  <body>
    <h2>Palmarès de la ligue des champions de 2000 à 2022</h2>
    <?php
      $palmares = array(
        2022 => "Real Madrid",    2021 => "Chelsea",      2020 => "Bayern Munich",
        2019 => "Liverpool",      2018 => "Real Madrid",  2017 => "Real Madrid",
        2016 => "Real Madrid",    2015 => "Barcelone",    2014 => "Real Madrid",
        2013 => "Bayern Munich",  2012 => "Chelsea",      2011 => "Barcelone",
        2010 => "Inter Milan",    2009 => "Barcelone",    2008 => "Manchester United",
        2007 => "AC Milan",       2006 => "Barcelone",    2005 => "Liverpool",
        2004 => "Porto",          2003 => "AC Milan",     2002 => "Real Madrid",
        2001 => "Bayern Munich",  2000 => "Real Madrid"
      );
      echo "<pre>";
      print_r($palmares);
      echo "</pre>";
    ?>

  </body>
</html>
