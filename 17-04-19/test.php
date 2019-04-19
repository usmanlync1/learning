<?php
$a = array(array(array(1, 2), array(3, 4), array(5, 6)),
           array(array(7, 8), array(9, 10), array(11, 12)),
           array(array(13, 14), array(15, 16), array(17, 18)));
// Dimensions are: a[3][3][2]. So it's a cuboid shape.

foreach ($a as $i => $inner_a) {
   foreach ($a[i] as $j => $inner_b) {
     foreach ($a[$i][$j] => $k => $inner_c) {
       echo "{$a[$i][$j][$k]}\n";
     }
   }
}

// You could also use inner references instead of reindexing.
foreach ($a as $inner_a) {
   foreach ($inner_a as $inner_b) {
     foreach ($inner_b as $inner_c) {
       echo "{$inner_c}\n";
     }
   }
}

 ?>
