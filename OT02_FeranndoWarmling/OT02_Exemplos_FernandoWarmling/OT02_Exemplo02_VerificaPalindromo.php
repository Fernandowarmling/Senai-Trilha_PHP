<?php

function ehPalindromo($texto)
{
    $textoInvertido = strrev($texto);
    return strtolower($texto) === strtolower($textoInvertido);
}

$resultado = ehPalindromo("Amor a Roma");
echo $resultado ? "É palindromo." : "Não é palindromo.";
