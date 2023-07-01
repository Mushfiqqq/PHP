<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="basic calculator.php" method="get">
      Number 1: <input type="number" name="number1">
      <br>
      Number 2: <input type="number" name="number2">
      <br>
      <input type="submit">
    </form>
    <hr>

    <?php

      echo "After addition = ";
      echo $_GET["number1"] + $_GET["number2"];
      echo "<br>";
      echo "After subtraction = ";
      echo $_GET["number1"] - $_GET["number2"];
      echo "<br>";
      echo "After multiplication = ";
      echo $_GET["number1"] * $_GET["number2"];
      echo "<br>";
      echo "After division = ";
      echo $_GET["number1"] / $_GET["number2"];
      echo "<br>";
     ?>
  </body>
</html>
