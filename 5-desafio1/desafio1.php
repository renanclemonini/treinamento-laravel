<?php

$usuarios = [];

$usuario = [
    "nome"=> "Renan",
    "idade" => 30,
    "sexo"=> "masculino",
];

$usuario1 = [
    "nome"=> "Paulo",
    "idade"=> "38",
    "sexo"=> "masculino",
];

array_unshift($usuarios, $usuario, $usuario1);



// $conteudo = file_get_contents("exemplo.txt");
// // $usuario = json_decode($conteudo, true);

// // echo $usuario['idade'];

// print_r($conteudo);

if (is_dir("lixo")) {
    file_put_contents("lixo/usuarios.txt", json_encode($usuarios));
} else {
    mkdir("lixo");
}


?>