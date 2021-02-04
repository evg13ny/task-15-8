<?php

$a = readline('Введите первое число');
$b = readline('Введите второе число');

if ($a > $b) {
    $max = $a;
} else {
    $max = $b;
}

echo $max;

?>