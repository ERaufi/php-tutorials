<?php
// Logical Operators
// AND Operator (&&)
// OR Operator (||)
// NOT Operator (!)

// $age=19;
// $hasLicense=false;

// if($age>=18 && $hasLicense)
// {
//     echo 'you can drive<br>';
// }

// if($age>=18 || $hasLicense)
// {
//     echo 'you can still drive';
// }

// if not has license
// Reverse operator
// if(!$hasLicense)
// {
//     echo 'dose not have license';
// }

$hasKey = true;
$hasFuel = false;
$isElectric = true;
$isCharge = false;

if (($hasKey && $hasFuel) || ($isElectric && $isCharge)) {
    echo "the car can start";
}else{
    echo 'the car cannot start';
}
