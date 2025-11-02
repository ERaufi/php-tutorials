<?php
// Advance Array functions
$car = ['BMW', 'Audi', 'Tesla'];
$moreCars=['Mercedes','Toyota'];

$allCars=array_merge($moreCars,$car);

$slice=array_slice($allCars,1,3);

// array_splice($allCars,1,3);
// echo array_search('Tesla',$allCars);
// for($i=0;$i<count($allCars);$i++)
// {
//     echo $allCars[$i];
//     echo "<br>";
// }

?>