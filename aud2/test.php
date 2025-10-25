
<?php
//echo '<h1>Index page </h1>';
//ECHO '<p> If you can see this, this file has been parsed!</p>';


$a = "akhjadk" . "ajdksdksd";
echo print 'Hello World';
echo '<br />';
echo '<br />';

//$a = [];
var_dump($a);

echo '<br />';
echo '<br />';

$s1 = 'ISOK'; //istovo i na kirilica
$s2 = "ИСОК in en is $s1";
echo $s2;

echo '<br />';
echo '<br />';
$numbers = [1,2,3,4,5];

?>

<p> The Value of 5 is: <?= $a ?> </p>
<p> The length of <?= $s1 ?> is: <?= strlen($s1) ?> </p>
<p> The length of <?= $s1 ?> is: <?= mb_strlen($s1) ?> </p>

