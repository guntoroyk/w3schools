<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays Multidimensi with For Loop</title>
  </head>
  <body>
    <?php
      $cars = array(
        array('Volvo', 25, 14),
        array('BMW', 10, 7),
        array('Saab', 17, 15),
        array('Land Rover', 7, 3)
      );

      for ($row=0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col=0; $col < 3; $col++) {
          echo "<li>". $cars[$row][$col]. "</li>";
        }
        echo "</ul>";
      }
     ?>
  </body>
</html>
