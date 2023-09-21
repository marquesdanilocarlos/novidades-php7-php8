<?php

interface ProductInterface {
    public function hydrate(array $data, bool $isValid, int $value, string $name): array;
}

class Product implements ProductInterface {
    public function hydrate(array $data, bool $isValid, int $value, string $name): array
    {
        //return true;
        var_dump($data, $isValid, $value, $name);
        return [];
    }
}

$product = new Product();
//var_dump($product->hydrate(1,[],'data', 10));
var_dump($product->hydrate([],true,10, 'Danilo'));