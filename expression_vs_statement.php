<?php
// PHP Expression vs Statement Tutorial


// Expressions====================================
$number = 5 + 3;
echo "Result: $number";

echo "<br><br>";


$day = "Sunday";

$message = match ($day) { //Returns a value
    "Saturday", "Sunday" => "It’s a weekend.",
    default => "It’s a weekday.",
};

echo $message;

echo "<br><br>";


// Statement Examples

$fruit = "banana";

switch ($fruit) { // ✅ Performs an action
    case "apple":
        echo "Red fruit.";
        break;
    case "banana":
        echo "Yellow fruit.";
        break;
    case "grape":
        echo "Purple fruit.";
        break;
    default:
        echo "Unknown fruit.";
}

echo "<br><br>";


$sum = 15 + 8;
if  ($sum > 20) { // ✅ Performs an action
   echo "The sum is greater than 20.";
}

echo "<br><br>";



// Expression vs Statement=====================
$age = 17;
$status = ($age >= 18) ? "Adult" : "Minor";// Returns value

echo "You are a $status.";

echo "<br><br>";

if ($age >= 18) { // ✅ Performs an action
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
