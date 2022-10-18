<?php 

$num = 33;
echo PHP_INT_MAX, "<br>";
$num1 = 0b111;
$num2 = 012;
$num3 = 0xA;
echo $num1, "<br>";

echo gettype($num), "<br>";
echo var_dump($num), "<br>";

is_int($num);

?>