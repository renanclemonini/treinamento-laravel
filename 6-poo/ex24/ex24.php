<?php

spl_autoload_register(function($className) {
    include __DIR__ . '/' . $className . '.php';
});

$dog = new Cachorro("Dog1", "macho");

echo $dog;
echo " ======================== " . PHP_EOL;
$dog->trocarNome("Dogginha");
$dog->trocarSexo("Femea");

echo $dog;

?>