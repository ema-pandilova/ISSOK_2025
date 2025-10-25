<?php
/**
 * Playing with Arrays
 * List of functions: https://www.php.net/manual/en/ref.array.php
 **/
$array = [1, 2,3];
// Creating an array
$array = ['value1', 2, 'value3', 4.5];

// Printing the contents of an array
print_r($array);
// Output:
// Array ( [0] => value1 [1] => 2 [2] => value3 [3] => 4.5 )
// Note: Arrays in PHP start at index 0

// Accessing a specific value
echo $array[2]; // Outputs: value3

// Looping through an array
foreach ($array as $value) {
    echo $value . '<br />';
}
echo '<br />';
// Counting items in an array
echo count($array); // Outputs: 4
echo '<br />';

// Associative array with string keys
$newArray = ['key' => 'value', 'key2' => 'value2'];

// Accessing a value from an associative array
echo $newArray['key2']; // Outputs: value2
echo '<br />';

// Replacing a value in an associative array
$newArray['key2'] = 'something else';

// Checking if an item exists in an array
$names = ['Marcus', 'Tom', 'Jerry'];

if (in_array('Jeff', $names)) {
    echo 'Jeff is in the array!';
} else {
    echo 'Jeff is not in the array!';
}
echo '<br />';
// Removing the last item of an array
$lastName = array_pop($names); // $lastName is 'Jerry'

// Adding an item to the end of an array
array_push($names, 'Jerry'); // Jerry is back!
// Alternatively
$names[] = 'Jeff'; // Jeff is now in our array!

// Reversing the order of an array
$reversed = array_reverse($names);

// Sorting a bunch of numbers
$numbers = [7, 4, 1, 3, 6];
sort($numbers); // Ascending order
print_r($numbers); // 1, 3, 4, 6, 7
echo '<br />';
rsort($numbers); // Descending order
print_r($numbers); // 7, 6, 4, 3, 1
echo '<br />';
// Sorting names with mixed cases using natural order
$newNames = ['Cheryl', 'Bob', 'bernie', 'Amanda'];
natcasesort($newNames);
print_r($newNames);
echo '<br />';
// Shuffling an array
shuffle($newNames);
print_r($newNames);
echo '<br />';
// Calculating the sum of all numbers in an array
$numberList = [1, 8, 13, 6, 5];
echo array_sum($numberList); // 33
echo '<br />';
// Merging multiple arrays
$fruits = ['a' => 'apple', 'b' => 'banana', 'c' => 'canteloupe'];
$veggies = ['z' => 'zucchini', 'y' => 'yam', 's' => 'shallot'];
$fruitsAndVeggies = array_merge($fruits, $veggies);
print_r($fruitsAndVeggies);
echo '<br />';
// Applying a function to an array
$lowercased = ['these', 'words', 'are', 'all', 'lowercased'];
$uppercased = array_map('strtoupper', $lowercased);
print_r($uppercased);

?>
