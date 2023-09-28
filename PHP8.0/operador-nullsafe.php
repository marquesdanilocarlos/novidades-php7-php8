<?php

class Venda
{
    public function __construct(public ?Carro $carro = null)
    {
    }
}

class Carro
{
    public function __construct(public Marca $marca, public string $nome)
    {
    }
}

class Marca
{
    public function __construct(public string $nome)
    {
    }
}

$marca = new Marca("Fiat");
$carro = new Carro($marca, "Palio");
//$venda = new Venda($carro);
$venda = new Venda();

echo $venda->carro?->marca->nome;