<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        function calculate($number){
          echo "hello<br>";
          return $number*$number*$number;
        }

        echo calculate(4);
    ?>
  </body>
</html>
