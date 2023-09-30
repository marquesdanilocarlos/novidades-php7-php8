<?php

readonly class Pessoa
{
    public function __construct(
        public string $nome,
        public string $sobrenome,
        public DateTimeImmutable $dataNascimento = new DateTimeImmutable('1991-07-11')
    ) {
    }
}

$danilo = new Pessoa('Danilo', 'Marques');

//$danilo->sobrenome = "Carlos";
var_dump($danilo);

