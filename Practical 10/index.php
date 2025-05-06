<?php

$fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");


echo "Original Array:\n";
print_r($fruits);


array_push($fruits, "Fig");
echo "\nArray after adding an element:\n";
print_r($fruits);

array_pop($fruits);
echo "\nArray after removing the last element:\n";
print_r($fruits);

$search = "Cherry";
if (in_array($search, $fruits)) {
    echo "\n'$search' is found in the array.\n";
} else {
    echo "\n'$search' is not found in the array.\n";
}

sort($fruits);
echo "\nArray after sorting:\n";
print_r($fruits);

$reversed = array_reverse($fruits);
echo "\nReversed Array:\n";
print_r($reversed);

$count = count($fruits);
echo "\nNumber of elements in the array: $count\n";
?>