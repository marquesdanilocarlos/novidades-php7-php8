<?php

$names = ["Pedro", "Carlos", "João"];

[$client1, $client2, $client3] = $names;

var_dump($client1, $client2, $client3);


$clients = [
    [1,"Danilo"],
    [2,"Pedro"],
    [4,"Samara"],
    [5,"Dora"]
];

foreach ($clients as [$id, $name]) {
    echo "$id - $name <br/>";
}