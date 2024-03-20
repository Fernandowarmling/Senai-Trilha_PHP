<?php
$numeroDefinir = 3101;
$restoDaDivisao = $numeroDefinir % 2;

if($restoDaDivisao == 0){
    $parImpar = "Par";

    echo  "O numero $numeroDefinir é $parImpar";

}else{

    $parImpar = "Impar";
    echo  "O numero $numeroDefinir é $parImpar";
}