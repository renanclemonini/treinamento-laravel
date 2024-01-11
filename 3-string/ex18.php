<?php

$frases = array("Programar é legal","João é um desenvolvedor de sistemas");

foreach($frases as $fra){
    if(strlen($fra) > 20)
    {
        echo substr($fra, 0, 20) . "..." . PHP_EOL;
    }
    else
    {
        echo $fra . PHP_EOL;
    }
}

?>