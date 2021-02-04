<?php

$a = readline('Введите первое число');
$b = readline('Введите второе число');
$c = readline('Введите третье число');

if ($a >= $b && $a >= $c) {
    $max = $a;
} elseif ($b >= $a && $b >= $c) {
    $max = $b;
} else {
    $max = $c;
}

echo $max;

?>