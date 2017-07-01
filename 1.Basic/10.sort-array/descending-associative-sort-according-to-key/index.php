<?php
$age = array('Igun' => '18', 'Dyah' => '14', 'Ian' => '10' );
krsort($age);

foreach ($age as $key => $value) {
  echo "Key = ". $key. ", Value = ". $value;
  echo "<br/>";
}
 ?>
