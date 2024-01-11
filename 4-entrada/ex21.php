<?php

$frase = "Maria é uma mulher de fibra!" . PHP_EOL;
echo $frase;

$palavraParaModificar = readline("Informe a palavra a ser substituida: ");
$novaPalavra = readline("Informe a nova palavra: ");

$frase = str_replace($palavraParaModificar, $novaPalavra, $frase);

echo $frase;

?>