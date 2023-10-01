<?php

trait Base
{
    public const TEMPO_LIMITE = 10;
}

class Teste
{
    use Base;
}

echo Teste::TEMPO_LIMITE;
