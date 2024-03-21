<?php

$a = 10 ;
$b = 10 ;

function multiplicar ($a,$b){
    $calculo = $a * $b;

    return $calculo;
}

$produto = multiplicar($a,$b);

echo "o Produto de $a * $b é $produto ";