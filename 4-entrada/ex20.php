<?php

$qtd = readline("Quantas pessoas você deseja convidar? ");

for ($i = 1; $i <= $qtd; $i++) {
    $convidados[] = readline("Informe o nome do {$i}º convidade: ");
}

echo "Os convidados são: " . PHP_EOL;

foreach ($convidados as $convidado) {
    echo sprintf("- %s", $convidado) . PHP_EOL;
}

?>