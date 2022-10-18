<?php

$arr_number = [1, 3, 54, 55];
echo $arr_number['3'], "<br>";

$arr_user = ['name' => 'John', 'email' => 'john@example.com', 'password' => 'password', 'age' => 23];
echo $arr_user['name'], "<br>";

is_array($arr_user);
echo "<pre>";
print_r($arr_user);
echo "</pre>";
?>