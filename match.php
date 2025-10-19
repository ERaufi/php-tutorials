<?php
// Match Expression
// $fruit="sadfafdas";

// $color=match($fruit){
//     "apple"=>"Red Fruit",
//     "banana"=>"Yellow Fruit",
//     "grape"=>"purple Fruit",
//     default=>"Unknow fruit",
// };

// echo $color;


$day="zdfdfsdf";

$type=match($day){
    "Saturday","Sunday"=>'Weekend',
    "Monday","Tuesday","Wednesday","Thursday","Friday"=>"Weekday",
    default=>"Invalid day"
};

echo $type;
?>