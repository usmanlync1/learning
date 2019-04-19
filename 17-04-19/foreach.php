<?php

// no need to define index
// foreach only works with arrays, when there are no Array
// it won't work.
$x = ["alex",
      "victor",
      "john"];
foreach($x as $value){
  echo $value."<br>";
}

 ?>
