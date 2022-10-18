<?php

$name = "Jack";
$century = 20;

echo $name;
echo 'Hello world! <br>';
echo "Hello $name <br>";
echo 'Hello $name <br>';
echo 'сумма 2 + 3 = ' . 3 + 2;
echo "$name was born in {$century}th century<br>";

$century = 30;

echo 'name: ' . $name . ' century: ' . $century;
?>


<div>
    <p> <?php echo 123 + 23 ?> </p>
    <p> <?= 123 + 23 ?> </p>
    <p> Текущая дата <?= date('d.m.Y H:i:s') ?> </p>
</div>