<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Student {
        var $name;
        var $major;
        var $cgpa;

        function __construct($aName, $aMajor, $aCgpa){
          $this->name = $aName;
          $this->major = $aMajor;
          $this->cgpa = $aCgpa;
        }

        function hasHonors(){
          if($this->cgpa >= 2.00){
            return "true";
          }
          return "false";
        }
      }
      $student1 = new Student("Mushfiq", "CSE", 3.46);
      $student2 = new Student("Sami", "BBA", 1.95);

      echo $student1->hasHonors();
      echo "<br>";
      echo $student2->hasHonors();


    ?>
  </body>
</html>
