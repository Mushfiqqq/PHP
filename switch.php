<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="switch.php" method="post">
        What is your grade?
        <input type="text" name="grade"><br>
        <input type="submit">
    </form>
    <?php
      $grade=$_POST["grade"];
      switch ($grade) {
        case "A":
            echo "You did amazing!";
          break;
        case "B":
            echo "You did good!";
          break;
        case "C":
            echo "You did average!";
          break;
        case "D":
            echo "You did below average!";
          break;
        case "E":
            echo "You did really bad!";
          break;
        case "F":
            echo "You Failed!";
          break;
        default:
            echo "Invalid Grade!";
          break;
      }
    ?>
  </body>
</html>
