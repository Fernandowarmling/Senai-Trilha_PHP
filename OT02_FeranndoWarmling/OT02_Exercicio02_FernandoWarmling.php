<?php

function validaPrimo($numero)
{
    $n = $numero;
    $divisor = 0;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            echo "Multiplo de $i \n";
            $divisor++;
        }
    }

    if ($divisor > 0)  echo "Não é primo, tem $divisor divisores além de 1 e ele mesmo";
    else    echo "É primo!";
}

validaPrimo(8);
