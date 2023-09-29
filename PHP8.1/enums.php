<?php

enum Status: int
{
    case Pendente = 0;
    case Pago = 1;
    case Cancelado = 2;
}

class Transacao
{
    public int $status;
}

$primeiraTransacao = new Transacao();
$primeiraTransacao->status = 0;

if ($primeiraTransacao->status === Status::Pendente) {
    echo "Está pendente";
}
