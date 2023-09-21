<?php

$a = 1;
$b = 0;
$c = 1;

//Esquerda maior = 1
var_dump($a <=> $b);
//Direita maior = -1
var_dump($b <=> $a);
//Iguais = 0
var_dump($a <=> $c);

$nomes = ["Lucas", "Jovêncio", "Arnaldo", "Danilo", "Samara"];

//Ordenação por tamanho de caracteres
usort($nomes, function($esq, $dir){
    return strlen($esq) <=> strlen($dir);
});

var_dump($nomes);