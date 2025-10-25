<?php
// Merging two arrays into one
$array1 = ['apple', 'banana'];
$array2 = ['cherry', 'date'];
$merged = array_merge($array1, $array2); // ['apple', 'banana', 'cherry', 'date']

// Removing the last element from an array
$fruits = ['apple', 'banana', 'cherry'];
$lastFruit = array_pop($fruits); // 'cherry', $fruits = ['apple', 'banana']

// Adding elements to the end of an array
array_push($fruits, 'date', 'fig'); // ['apple', 'banana', 'date', 'fig']

// Removing the first element from an array
$firstFruit = array_shift($fruits); // 'apple', $fruits = ['banana', 'date', 'fig']

// Adding elements to the beginning of an array
array_unshift($fruits, 'apricot', 'blueberry'); // ['apricot', 'blueberry', 'banana', 'date', 'fig']

// Extracting a slice from an array
$slice = array_slice($fruits, 2, 2); // ['banana', 'date']

// Replacing a part of an array
$input = ['red', 'green', 'blue', 'yellow'];
array_splice($input, 1, -1, ['orange', 'purple']); // ['red', 'orange', 'purple', 'yellow']

// Getting all keys from an associative array
$assoc = ['first' => 'apple', 'second' => 'banana'];
$keys = array_keys($assoc); // ['first', 'second']

// Getting all values from an associative array
$values = array_values($assoc); // ['apple', 'banana']

// Checking if a value exists in an array
$exists = in_array('banana', $fruits); // true

// Searching for a value in an array
$key = array_search('banana', $fruits); // 2

// Applying a function to elements of an array
$numbers = [1, 2, 3];
$squared = array_map(function($n) { return $n * $n; }, $numbers); // [1, 4, 9]

// Filtering elements of an array
$even = array_filter($numbers, function($n) { return $n % 2 == 0; }); // [2]

// Reducing an array to a single value
$sum = array_reduce($numbers, function($carry, $item) { return $carry + $item; }, 0); // 6

// Sorting an array
sort($fruits); // Sorts $fruits in place to ['apricot', 'banana', 'blueberry', 'date', 'fig']

?>
