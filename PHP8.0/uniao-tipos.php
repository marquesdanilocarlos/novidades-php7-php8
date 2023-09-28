<?php

//declare(strict_types=1);

class Marca
{}

class Carro
{

    protected int $velocidadeAtual = 10;
    public function __construct(
        public string|Marca $marca,
        public string|int $cor,
        public int|string $ano,
    ) {
    }

    public function __toString(): string
    {
        return "{$this->marca} - {$this->ano} - {$this->cor}";
    }

    //Void não é permitido na união de tipos
    public function andar(int|string $velocidade, int|string|null $aceleracao = null,): string|float
    {
        return "{$aceleracao} - {$velocidade}";
    }

    public function estaAndando(): int|false /*|bool Não pode bool juntamente com false*/
    {
        if ($this->velocidadeAtual > 0) {
            return $this->velocidadeAtual;
        }

        return false;
    }
}

$uno = new Carro(cor: 'preto', marca: "Fiat", ano: 2012);
echo $uno->andar(velocidade: 110,);
echo $uno;
echo $uno->estaAndando();