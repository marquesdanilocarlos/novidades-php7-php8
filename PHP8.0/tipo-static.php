<?php

class Veiculo
{
    static protected function ligar(): static
    {
        return new static;
    }

    public static function ignicao(): void
    {
        var_dump(self::ligar());
    }
}

class Carro extends Veiculo
{
    public static function ignicao(): void
    {
        var_dump(parent::ligar());
    }
}

Veiculo::ignicao();
Carro::ignicao();
