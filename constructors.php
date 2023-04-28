<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Book {
        var $title;
        var $author;
        var $pages;


        function __construct($aTitle, $aAuthor, $aPages){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }

      $book1 = new Book("Discrete Mathematics", "Arnold", 1000);

      $book2 = new Book("Precalculus", "Anton Devis", 1200);

      echo $book1->title;
      echo "<br>";
      echo $book1->author;
      echo "<br>";
      echo $book1->pages;
      echo "<hr>";
      echo $book2->title;
      echo "<br>";
      echo $book2->author;
      echo "<br>";
      echo $book2->pages;
      echo "<br>";
    ?>
  </body>
</html>
