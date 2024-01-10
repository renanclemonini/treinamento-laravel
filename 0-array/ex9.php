<?php

$meuArray = [1,2,3,4,5];

$dobro = true;

if($dobro) {
    foreach($meuArray as $arrayDobrado){
        $arrayDobrado *= 2;
        $novoArray[] = $arrayDobrado;
    }
    
    print_r($novoArray);

}

?>