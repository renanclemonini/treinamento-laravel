<?php

$lista = [1, 2, 3, 4, 5, 6];
$contador = 0;

while ($contador < count($lista)) {
    if($lista[$contador] % 2 == 0){
        $pares[] = $lista[$contador];
    } else {
        $impares[] = $lista[$contador];
    }
    
    $contador++;
}


print_r($pares);
print_r($impares);

?>