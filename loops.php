<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $index = 1;
      while($index <= 5){
        echo $index;
        echo "<br>";
        $index++;
      }
      echo "<br>";
      echo "<hr>";
      echo "<br>";

      $index = 6;
      do{
        echo $index;
        echo "<br>";
        $index++;
      }while($index <= 5);

      echo "<br>";
      echo "<hr>";
      echo "<br>";

      $luckyNumbers = array(3, 6, 7, 12, 16, 22);
      for($i = 0; $i < count($luckyNumbers); $i++){
        echo $luckyNumbers[$i];
        echo "<br>";
      }
    ?>
  </body>
</html>
