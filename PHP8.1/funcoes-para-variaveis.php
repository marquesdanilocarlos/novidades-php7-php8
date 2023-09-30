<?php

function soma ($a, $b) {
    return $a+$b;
};

$soma = soma(...);

var_dump($soma);
var_dump($soma(10,20));