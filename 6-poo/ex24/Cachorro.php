<?php

class Cachorro
{
    private String $nome;
    private String $sexo;

    public function __construct($nome, $sexo)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
    }

    public function trocarNome(String $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): String
    {
        return $this->nome;
    }

    public function trocarSexo(String $sexo): void
    {
        $this->sexo = $sexo;
    }

    public function getSexo(): String
    {
        return $this->sexo;
    }

    public function __toString(): String
    {
        $nome = $this->nome;
        $sexo = $this->sexo;
        return "Exibindo informações\nNome: $nome\nSexo: $sexo\nFim da exibição!" . PHP_EOL;
    }


}