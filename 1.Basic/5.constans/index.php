<?php
define("GREETING", "Welcome to my Blog!");
echo GREETING;
echo "<br/>";

define("GREETING2", "Be happy!", false);
echo GREETING2;
echo "<br/>";

function myTest() {

  echo GREETING2;
}
myTest();
 ?>
