<?php
$x = 10;
$y = 7;

function test(){
  global $x, $y;
  $y = $x + $y;
}
test();
echo $y;
 ?>
