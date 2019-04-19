<?php

$portfolio = array(
              "Pakistan" => array(
                "Punjab" => array(
                  "Lahore" => array(
                    "Lahore Medical Housing Society" => array(
                      "Usman"
                    )
                  )
                )
              )
);

foreach($portfolio as $info=>$value){
  foreach($value as $Country){
    echo $info;
    }
}

 ?>
