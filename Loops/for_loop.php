<?php

echo "race started <br>";
// $lap the starting position of loop
// $lap<=5 continue the lap until the $lap is smaller or
// equal to 5 (run 5 times)
// $lap++ increment the $lap by one after each of the lap
// break
// continue
for($lap=1;$lap<=5;$lap++)
{
    if($lap==3)
    {
        // break;
        continue;
    }
    echo "Lap No ".$lap ."<br>";
}

echo "race ended";

?>