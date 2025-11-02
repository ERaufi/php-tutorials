<?php

// function greeting($name,$last_name=null)
// {
//     echo "hello " .$name ."<br>" .$last_name ." <br>";
// }



// greeting('ERaufi','Raufi');
// greeting('John');
// greeting('Ali','Mike');

function add($a, $b)
{
    return $a + $b;
}

function multiply($x, $y)
{
    return $x * $y;
}


function calculateTotal($a,$b,$c)
{
    $sum=add($a,$b);
    $multiple=multiply($sum,$c);

    return $multiple;
}
// $result = add(10, 20);
$result=calculateTotal(10,20,2);
echo $result;
