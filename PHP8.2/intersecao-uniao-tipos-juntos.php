<?php

interface TemNome
{
    public function getNome(): string;
}

interface TemSobreNome
{
    public function getSobreNome(): string;
}

class Pessoa implements TemNome, TemSobreNome
{
    public function __construct(
        public readonly string $nome,
        public readonly string $sobreNome
    )
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobreNome(): string
    {
        return $this->sobreNome;
    }

}

function imprimeNome((TemNome&TemSobreNome)|Pessoa $pessoa): void
{
    echo "Nome: " . $pessoa->getNome();
    echo "<br/>";
    echo "Sobrenome: " . $pessoa->getSobreNome();
}

$joao = new Pessoa('Jão', 'Lima');

imprimeNome($joao);
