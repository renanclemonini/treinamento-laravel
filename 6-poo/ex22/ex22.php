<?php

require_once("Pessoa.php");

$joao = new Pessoa("João", "Miguel", "masculino", 10);
$joao->dizerNome();
echo "  " . PHP_EOL;
$mariana = new Pessoa("Mariana", "Matos", "feminino", 11);
$mariana->dizerNome();

?>