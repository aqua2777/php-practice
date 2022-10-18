<?php

$name = "Alexander";
$name1 = "Алуксандр";
$age = 14;

echo gettype($name) . "<br>";
echo is_string($name), "<br>"; // 1 (true)
echo is_string(123), "<br>"; // '' (false)

echo var_dump($name) . "<br>";
echo var_dump($name1) . "<br>";

if(is_string($name)) {
    echo "$name это строка <br>";
} else {
    echo "$name это не строка <br>";
}

if(is_string($age)) {
    echo "$age это строка <br>";
} else {
    echo "$age это не строка <br>";
}

?>