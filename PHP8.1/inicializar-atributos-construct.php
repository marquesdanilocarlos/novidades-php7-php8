<?php

class Nome
{
    public function __construct(
        public string $nome,
        public string $sobreNome,
    ) {
    }
}

class Pessoa
{
    public function __construct(
        public Nome $nome = new Nome('Danilo', "Marques")
    )
    {
    }
}

$joao = new Pessoa;
var_dump($joao->nome);