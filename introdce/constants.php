<?php

define ("CONSTANT_NAME", "123");

echo CONSTANT_NAME . "<br>";

define ("ARRAY_CONSTANT", [0 => "1", 1 => "2", 2 => "3", 3 => "4"]);

echo ARRAY_CONSTANT[0] . "<br>";


echo __DIR__ , "<br>";
echo __FILE__ , "<br>";
echo __LINE__ , "<br>";
echo PHP_VERSION , "<br>";
error_reporting(E_ALL);

?>