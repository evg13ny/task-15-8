<?php

$N = readline('Введите число');

function is_prime ($x)
{
    for ($i = 2; $i <= sqrt($x); $i++) {
        if ($x % $i == 0) {
            return 0;
        }
    }
    return 1;
}

$answ = is_prime($N);

echo ($answ == 1) ? 'prime' : 'composite';

?>