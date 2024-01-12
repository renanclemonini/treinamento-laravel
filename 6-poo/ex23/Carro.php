<?php

class Carro
{
    private float $velocidade = 0;

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
        if($this->velocidade >= 0)
            return $this->velocidade -= 10;
    }


}


?>