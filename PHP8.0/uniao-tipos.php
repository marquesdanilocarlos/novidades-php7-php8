<?php

declare(strict_types=1);
class Carro
{
    public function __construct(public string $marca, public string $cor, public int $ano,)
    {
    }

    public function __toString(): string
    {
        return "{$this->marca} - {$this->ano} - {$this->cor}";
    }

    public function andar(int|string $aceleracao, int|string $velocidade,): string|float
    {
        return "{$aceleracao} - {$velocidade}";
    }
}

$uno = new Carro(cor: 'preto', marca: "Fiat", ano: 2012);
echo $uno->andar(velocidade: 110, aceleracao: '5',);
echo $uno;