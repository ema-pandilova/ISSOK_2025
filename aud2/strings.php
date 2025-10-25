<?php

/* STRINGS */

$firstName = 'Will';
$lastName = " {$firstName} Smith"; //it works also without curly brackets

echo $lastName . '<br/>';
echo $lastName[-2]; // we get the second letter from the back
echo '<br />';

$x = 1;
$y = 2;
// Heredoc
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3
TEXT;

echo nl2br($text);


// Nowdoc
$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3
TEXT;

echo '<br />';
echo nl2br($text);

