<?php

$b = 3;
$b = (string) $b;
echo gettype($b) . "<br>";

$b = (float) $b;
echo gettype($b) . "<br>";

$b = (bool) $b;
echo gettype($b) . "<br>";

echo $b .   "<br>";

$c = "33";
$c = (int) $c;
echo gettype($c) . "<br>";

$c = (array) $c;
echo gettype($c) . "<br>";

print_r($c);

?>