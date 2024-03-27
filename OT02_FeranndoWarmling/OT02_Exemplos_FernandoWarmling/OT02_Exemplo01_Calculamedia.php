<?php

function calcularMedia($nota01, $nota02)
{
    $media = ($nota01 + $nota02) / 2;
    return  $media;
}

$mediaAluno = calcularMedia(8,9);
echo "A media do alune é : " .$mediaAluno;
