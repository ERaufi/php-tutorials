<?php

$car=['BMW','Audi','Tesla'];

$car[]="Mercedes";
array_push($car,'Toyota','Honda');


array_pop($car);
// echo count($car);
array_unshift($car,'Volkswagen');

sort($car);
array_find($car,'BMW');
// for($i=0;$i<count($car);$i++)
// {
//     echo $car[$i];
//     echo "<br>";
// }

// print_r($car);
var_dump($car);
?>