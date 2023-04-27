<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $isMan=false;
        $isTall=true;

        if($isMan && $isTall){
          echo "You are a tall male";
        }else if($isMan && !$isTall){
          echo "You are short male";
        }else if(!$isMan && $isTall){
          echo "You are not a male but are tall";
        }else {
          echo "You are neither man nor tall";
        }
    ?>
  </body>
</html>
