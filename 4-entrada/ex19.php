<?php

$nome = readline("Informe seu nome: ");
$sobrenome = readline("Informe seu sobrenome: ");
$cpf = readline("Informe seu CPF: ");

$nomeCompleto = "$nome $sobrenome";

$cpf3 = substr($cpf,0,3);

echo "Olá $nomeCompleto! Os 3 primeiros digitos do seu CPF são: $cpf3";