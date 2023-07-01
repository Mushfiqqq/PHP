<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="better calculator.php" method="post">
      Number1: <input type="number" step="0.000001" name="num1"><br>
      Number2: <input type="number" step="0.000001" name="num2"><br>
      Operation: <input type="text" name="op"><br>
      <input type="submit"><br>
    </form>
    <?php
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $op=$_POST["op"];

      if($op == "+"){
        echo $num1+$num2;
      }else if($op == "-"){
        echo $num1-$num2;
      }else if($op == "*"){
        echo $num1*$num2;
      }else if($op == "/"){
        echo $num1/$num2;
      }else{
        echo "Invalid Operation";
      }
    ?>
  </body>
</html>
