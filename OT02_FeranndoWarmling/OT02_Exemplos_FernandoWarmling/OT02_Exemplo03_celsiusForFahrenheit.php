<?php

function celsiusParaFahrenheit($celsius)
{
    $fahrenheit = ($celsius * 9 / 5) + 32;
    return $fahrenheit;
}

$temperaturaCelsius = 20;
$temperaturaFahrenheit = celsiusParaFahrenheit($temperaturaCelsius);
echo "A temperatura em FahrenHeit é: " . $temperaturaFahrenheit;
         