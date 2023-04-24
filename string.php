<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $phase = "Giraffe Academy";
      echo strtoupper($phase);
      echo "<br>";
      echo strtolower($phase);
      echo "<br>";
      echo strlen($phase);
      echo "<br>";
      echo str_replace("ffe", "Panda", $phase);
      echo "<br>";
      echo substr($phase, 8, 3);

     ?>
  </body>
</html>
