<?php

function fibonacci($n) {
    $list = [];

    if ($n >= 1) {
        $list[] = 0;
    }

    if ($n >= 2) {
        $list[] = 0;
    }

    for ($i = 2; $i < $n; $i++) {
        $list[] = $list[$i - 1] + $list[$i - 2];
    }

    return $list;
}

$N = 10;
$suite_fibonacci = list($N);

echo "Les $N premiers termes de la suite de Fibonacci sont : ";
echo implode(', ', $suite_fibonacci);