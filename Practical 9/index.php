<?php
// Demonstrating if-else structure
$number = 10;
if ($number % 2 == 0) {
    echo "$number is even.<br>";
} else {
    echo "$number is odd.<br>";
}

// Demonstrating loops
echo "Numbers from 1 to 5 using for loop:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// Function to calculate factorial
function factorial($n) {
    if ($n < 0) {
        return "Invalid input. Factorial is not defined for negative numbers.";
    }
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

$num = 5;
echo "Factorial of $num is: " . factorial($num) . "<br>";

// Demonstrating switch case
$day = 3;
switch ($day) {
    case 1:
        echo "Today is Monday.<br>";
        break;
    case 2:
        echo "Today is Tuesday.<br>";
        break;
    case 3:
        echo "Today is Wednesday.<br>";
        break;
    case 4:
        echo "Today is Thursday.<br>";
        break;
    case 5:
        echo "Today is Friday.<br>";
        break;
    case 6:
        echo "Today is Saturday.<br>";
        break;
    case 7:
        echo "Today is Sunday.<br>";
        break;
    default:
        echo "Invalid day.<br>";
        break;
}
?>