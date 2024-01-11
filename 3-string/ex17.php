<?php

$arr = array("Jaca", "Melancia", "Banana-da-terra", "Fruta-pão", "Graviola");

foreach($arr as $palavra)
{
    if(str_contains($palavra, "-"))
    {
        echo "$palavra (palavra composta)" . PHP_EOL;
    }
    else 
    {
        echo $palavra . PHP_EOL;
    }
}

?>