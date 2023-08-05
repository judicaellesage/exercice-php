<?php

function factorial($n)
{
    $j = 1;
    if ($n < 0) {
        return "Les nombres décimaux n'ont pas de factoriel";
    } elseif ($n == 0 or $n == 1) {
        return "1";
    } else {
        for ($i = 1; $i <= $n; $i++) {
            $j *= $i;
        }
    }

    return $j;
}

echo factorial(3); //va nous afficher 6