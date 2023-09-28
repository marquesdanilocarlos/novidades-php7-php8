<?php


function a() {
    return "Dez";
}

function b() {
    return "Nove";
}

$valor = 45;

$resultado = match ($valor) {
    10 => a(),
    9 => b(),
    default => "Outro valor"
};

var_dump($resultado);