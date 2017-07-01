<?php
function setHeight($minHeight = 50){
  echo "The height is : $minHeight <br/>";
}

setHeight(100);
setHeight(); //this will use default value of 50
setHeight(160);
 ?>
