<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $friends = array("mushfiq","sami","nourin","rafi");
        $friends[1] = "tasin";
        echo $friends[1];
        echo "<br>";
        echo count($friends);
    ?>
  </body>
</html>
