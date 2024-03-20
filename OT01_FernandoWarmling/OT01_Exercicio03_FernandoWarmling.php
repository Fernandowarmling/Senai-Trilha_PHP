<?php

$notaUm = 8;
$notaDois = 5.66;
$notaTres = 7.66;

$soma = $notaUm + $notaDois + $notaTres;

$media = $soma/3;

if($media >= 7){
    echo "Aluno aprevado com media: $media";
}else{
    echo "Aluno reprovado com media: $media";
}

