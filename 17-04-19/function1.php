<?php

function getTableData($table,$start,$end){
  $data=" ";
  for($i=$start; $i<=$end;$i++){
    $data .= $table.'x'.$i.'='.$table*$i.'<br>';
    return $data;
  }
}
$result = getTableData(8,5,15);
print_r ($result);
 ?>
