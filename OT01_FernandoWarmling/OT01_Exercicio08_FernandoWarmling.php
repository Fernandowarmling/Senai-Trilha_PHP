<?php

$usuarioBanco = "fernando";
$usuario = "fernando";

$senhaBanco = "123456789@";

$hash = '$2y$10$OJbL4iMXkG1wsHV1yQYPnuPZeJAfiH8ou1afnYZTQyWmJZRjQH3iu';

if($usuario == $usuarioBanco && password_verify($senhaBanco,$hash) ){
    echo "Bem Vindo !!! $usuarioBanco";
}else{
    echo "Erro de Validação";
}



