<?php

$N = readline('Введите число');

function fibonacci($N) {
    if ($N <= 1) {
        return $N;
    }
    return fibonacci($N - 1) + fibonacci($N - 2);
}

echo fibonacci($N);

?>