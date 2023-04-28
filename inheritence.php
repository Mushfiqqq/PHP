<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Chef {
        function makeChicken(){
          echo "The chef makes chicken";
        }

        function makeSpecialDish(){
          echo "The chef makes chicken bbq";
        }

        function makeNoodles(){
          echo "The chef makes noodles";
        }
      }
      class ItalianChef extends Chef {
        function makePasta(){
          echo "The chef makes pasta";
        }

        function makeSpecialDish(){
          echo "The chef makes italian pasta";
        }

        function makeFishPrawn(){
          echo "The chef makes fish prawn";
        }
      }

      $chef = new Chef;
      $chef->makeSpecialDish();

      echo "<br>";

      $italianchef = new ItalianChef;
      $italianchef->makeSpecialDish();


    ?>
  </body>
</html>
