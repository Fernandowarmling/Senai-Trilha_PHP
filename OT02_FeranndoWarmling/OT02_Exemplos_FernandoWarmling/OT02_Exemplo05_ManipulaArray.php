<?php
$cores = array("Vermelho", "Verde", "Azul");
echo count($cores);

array_push($cores, "Amarelo");
print_r($cores);

echo array_pop($cores);
