<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        function getMax($num1, $num2, $num3){
          if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
          }else if($num2 >= $num1 && $num2 >= $num3){
            return $num2;
          }else {
            return $num3;
          }
        }

        echo getMax(3300, 31250, 3312);
        //echo max(3, 5);
    ?>
  </body>
</html>
