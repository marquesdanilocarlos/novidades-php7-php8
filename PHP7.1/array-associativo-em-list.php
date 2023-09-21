<?php


$arr = ["nome" => "Danilo", "idade" => 32, "altura" => 1.70];
["nome" => $nome, "altura" => $altura] = $arr;

var_dump($nome, $altura);


$users = [
    [
        "id" => 1,
        "nome" => "Danilo"
    ],
    [
        "id" => 2,
        "nome" => "Juvenal"
    ],
    [
        "id" => 3,
        "nome" => "Cabeção"
    ],
];

foreach ($users as ['id' => $id, 'nome' => $nome]) {
    echo "{$id} - {$nome} <br/>";
}