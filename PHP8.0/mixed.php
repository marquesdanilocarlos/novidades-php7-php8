<?php
class Marca
{}

class Carro
{
    public function __construct(
        protected string|Marca $marca,
        protected string|int $cor,
        protected int|string $ano,
        protected float $velocidadeAtual,
        protected string $modelo,
    ) {
        $this->velocidadeAtual = 10;
    }

    public function info(string $nomePropriedade): mixed
    {
        return $this->{$nomePropriedade};
    }
}

$uno = new Carro('Fiat', 'preto', 110, 2012, 'Vivace');

echo $uno->info('marca');