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
      }

      $book1 = new Book;
      $book1->title = "Discrete Mathematics";
      $book1->author = "Arnold";
      $book1->pages = 1000;

      $book2 = new Book;
      $book2->title = "Precalculus";
      $book2->author = "Anton Devis";
      $book2->pages = 1200;

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
