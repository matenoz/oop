<?php
$dayOfTheWeek = array(
    "lun"  => 7,
    "mar"  => 4.5,
    "mer"  => 6,
    "gio"  => -2,
    "ven"  => 3,
    "sab"  => 2.8,
    "dom"  => -0.7
);

function average($array){
    $average = 0;
    foreach($array as $key => $value){
        $average = $average + $value/sizeof($array); 
    }
    return $average;
}

echo average($dayOfTheWeek);