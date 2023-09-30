<?php

function dd(...$params): never
{
    var_dump(...$params);
    die;
}

$nome = "Danilo";
$idade = 32;

dd($nome, $idade, [1, "oi", false]);