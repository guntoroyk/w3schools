<?php
$cars = array('Toyota', 'BMW', 'Daihatsu');
sort($cars);

$clength = count($cars);
for ($i=0; $i < $clength; $i++) {
  echo "$cars[$i]";
  echo "<br/>";
}

$numbers = array(7, 3, 6 , 1, 9, 10, 4, 6, 2);
sort($numbers);

$nlength = count($numbers);
for ($i=0; $i < $nlength ; $i++) {
  echo "$numbers[$i]";
  echo "<br/>";
}

 ?>
