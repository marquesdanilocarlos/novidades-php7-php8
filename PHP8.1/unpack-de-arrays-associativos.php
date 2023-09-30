<?php

$carrosAntigos = ['a' => "Fusca", 'b' => "Brasília", 'c' => "Variant"];
$carros = ["Honda City", "Argo", ...$carrosAntigos];

var_dump($carros);