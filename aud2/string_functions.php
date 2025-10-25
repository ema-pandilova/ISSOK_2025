<?php
// Finding the length of a string
$string = "Hello World";
$length = strlen($string); // 11

// Finding the position of a substring in a string
$position = strpos($string, "World"); // 6

// Extracting a substring from a string
$substring = substr($string, 6, 5); // "World"

// Replacing parts of a string
$replacedString = str_replace("World", "PHP", $string); // "Hello PHP"

// Trimming whitespace from the ends of a string
$trimmedString = trim("   Hello PHP   "); // "Hello PHP"

// Splitting a string into an array
$explodedArray = explode(" ", $string); // ["Hello", "World"]

// Joining array elements into a string
$implodedString = implode(" ", $explodedArray); // "Hello World"

// Converting a string to lowercase
$lowercaseString = strtolower($string); // "hello world"

// Converting a string to uppercase
$uppercaseString = strtoupper($string); // "HELLO WORLD"

// Capitalizing the first letter of a string
$ucfirstString = ucfirst("hello world"); // "Hello world"

// Capitalizing the first letter of each word in a string
$ucwordsString = ucwords("hello world"); // "Hello World"

// Calculating the MD5 hash of a string
$md5Hash = md5($string); // e.g., "fc3ff98e8c6a0d3087d515c0473f8677"

// Converting special characters to HTML entities
$htmlString = htmlspecialchars("<a href='test'>Test</a>"); // "&lt;a href='test'&gt;Test&lt;/a&gt;"

// Reversing a string
$reversedString = strrev($string); // "dlroW olleH"

// Formatting a number with grouped thousands
$formattedNumber = number_format(1000000); // "1,000,000"

?>
