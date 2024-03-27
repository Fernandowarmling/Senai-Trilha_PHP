<?php

echo date("d/m/Y");

$data_futura = strtotime("+1 week");
echo date("d/m/Y", $data_futura);
