<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="checkbox.php" method="post">
      <input type="checkbox" name="colors[]" value="Red"> Red
      <br> <input type="checkbox" name="colors[]" value="Blue"> Blue
      <br> <input type="checkbox" name="colors[]" value="Green"> Green
      <br> <input type="checkbox" name="colors[]" value="Black"> Black
      <br> <input type="submit"> <br>
    </form>
    <?php
        $colors = $_POST["colors"];
        echo "<br>";
        echo $colors[1];
    ?>
  </body>
</html>
