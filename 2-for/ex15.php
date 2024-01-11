<?php

$precos = array(10.5, 20.3, 15.2, 8.7);
$quantidades = array(2, 5, 3, 7);

for ($i = 0; $i < count($precos); $i++) {
    $produtos[] = $precos[$i] * $quantidades[$i];
}

print_r($produtos);

?>