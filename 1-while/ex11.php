<?php

$arrayInteiros = [3, 5, 7, 9, 12, 33, 23, 44];
$contador = 0;

while($contador < count($arrayInteiros)){
    echo "Posição {$contador}: $arrayInteiros[$contador]" . PHP_EOL;
    $contador++;
}

?>