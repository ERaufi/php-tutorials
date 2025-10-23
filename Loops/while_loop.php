<?php
$fuel=5;

while($fuel>0)
{
    $fuel--;

    if($fuel==2)
    {
        // break;
        continue;
    }

    echo "fuel percentage " . $fuel . "<br>";
}
?>