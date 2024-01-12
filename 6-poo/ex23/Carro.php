<?php

class Carro
{
    private float $velocidade;

    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade; 
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function acelerar()
    {
        return $this->velocidade += 10;
    }

    public function frear()
    {
        return $this->velocidade -=10;
    }


}


?>