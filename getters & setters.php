<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Movie {
        public $name;
        private $rating;

        function __construct($aName, $aRating){
          $this->name = $aName;
          $this->setRating($aRating);
        }

        function getRating(){
          return $this->rating;
        }

        function setRating($rating){
          if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R"){
            $this->rating = $rating;
          }
          else {
            $this->rating = "NA";
          }
        }
      }

      $movie1 = new Movie("Avengers", "DOG");
      $movie2 = new Movie("Justice League", "R");

      echo "<br>";
      echo $movie1->getRating();
    ?>
  </body>
</html>
