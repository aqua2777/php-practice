<?php

define("CITY", "Cherkasi");

$name = "Valera";

$age = 14;

$text = "My name is {$name}. I'm $age y.o. I'm living in " . CITY . " city";

//echo $text;

define ("COLOR", "#f00");

?>

<span>My name is</span>
<span class="c"><?= $name ?></span><span>. I'm </span>
<span class="c"><?= $age ?></span>
<span> y.o. I'm from the city of </span>
<span class="c"> <?= CITY ?></span>

<style>
    .c {
        color: <?= COLOR ?>;
    }
</style>