<?php
// Introduction to Arrays

// $car=['BMW','Audi','Tesla'];

// echo $car[0];
// echo $car[1];
// echo $car[2];

// $car[]="Mercedes";

// echo $car[3];

// echo "<br>".count($car);
// $car[]="New car";
// for($i=0;$i<count($car);$i++)
// {
//     echo $car[$i] ."<br>";
// }


// $student=[
//     "name"=>"Ali",
//     "age"=>20,
//     "grade"=>"A"
// ];


// echo $student['grade'];


$students=[
    ["Ali",'20','A'],
    ['Sara','21','B'],
    ['John','22','A+']
];


// echo $students[2][2];
// echo "<br>";
// echo $students[1][2];

for($i=0;$i<count($students);$i++)
{
    for($j=0;$j<count($students[$i]);$j++)
    {
        echo $students[$i][$j];
        echo "<br>";
    }

    echo "<br>";
}


?>