<?php


class Pessoa {
    public function __construct(public readonly string $nome)
    {
    }
}

$danilo = new Pessoa("Danilo");
//$danilo->nome = "Marques";
echo $danilo->nome;