<?php

class Pessoa
{
    final public const DATA_NASCIMENTO = "11/07/1991";
}

class Desenvolvedor extends Pessoa
{
    public const DATA_NASCIMENTO = "11/07/1992";
}

echo Desenvolvedor::DATA_NASCIMENTO;