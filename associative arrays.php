<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="associative arrays.php" method="post">
      Name: <input type="text" name="student"> <br>
      <input type="submit">
    </form>
    <?php
      $grades = array("sami"=>"A", "mushfiq"=>"B", "nourin"=>"B+");
      //$grades[$student] = "A-";
      echo $grades[$_POST["student"]];
      echo "<br>Number of array elements: ";
      echo count($grades);
    ?>
  </body>
</html>
