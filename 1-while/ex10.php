<?php

$contador = 1;

while($contador <= 20) {
    if($contador % 2 == 0) {
        $pares[] = $contador * 2;
    }
    $contador++;
}

print_r($pares);

?>