<?php

/*class Carro
{
    public string $marca;
    public string $cor;
    public int $ano;
    public function __construct(string $marca, string $cor, int $ano)
    {
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
    }

}*/


class Carro
{
    public function __construct(public string $marca, public string $cor, public int $ano)
    {
    }
}