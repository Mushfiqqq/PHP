<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="site.php" method="get">
      Name: <input type="text" name="name">
      <br>
      Age: <input type="number" name="age">
      <input type="submit">
    </form>

    <?php

      echo $_GET["name"];
      echo "<br>";
      echo $_GET["age"];
     ?>
  </body>
</html>
