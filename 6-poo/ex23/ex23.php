<?php 

spl_autoload_register(function($className) {
    include __DIR__ . '/' . $className . '.php';
}); 

$carro1 = new Carro;

echo "Velocidade inicial: " . $carro1->getVelocidade() . PHP_EOL;
$carro1->acelerar();
$carro1->acelerar();
$carro1->acelerar();
$carro1->acelerar();
echo "Velocidade final: " . $carro1->getVelocidade() . PHP_EOL;
$carro1->frear();
echo "Velocidade final: " . $carro1->getVelocidade() . PHP_EOL;



?>