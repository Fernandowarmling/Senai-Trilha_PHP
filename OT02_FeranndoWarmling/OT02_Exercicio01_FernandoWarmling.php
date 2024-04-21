<?php

function calculaMediaPonderada($notaUm, $notaDois, $notaTres)
{
    $mediaPonderada = ((2 * $notaUm) + (3 * $notaDois) + (5 * $notaTres)) / (2 + 3 + 5);
    return $mediaPonderada;
}

$media = calculaMediaPonderada(5,2,5);
echo "O valor da media é " .$media;