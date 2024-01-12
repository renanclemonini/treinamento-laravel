<?php

class Pessoa
{
    private String $nome;
    private String $sobrenome;
    private String $sexo;
    private int $idade;

    public function __construct(String $nome, String $sobrenome, String $sexo, int $idade)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->sexo = $sexo;
        $this->idade = $idade;
    }

    public function dizerNome(): void
    {
        $nomeCompleto = $this->nome . " " . $this->sobrenome;
        $sexo = $this->sexo;
        $idade = $this->idade;
        if ($sexo == "masculino")
            echo "Bem vindo ao clube do bolinha. Sou {$nomeCompleto} e tenho {$idade} anos";
        else if ($sexo == "feminino")
            echo "Bem-vindo ao clube da luluzinha. Sou $nomeCompleto e tenho {$idade} anos";
    }
}