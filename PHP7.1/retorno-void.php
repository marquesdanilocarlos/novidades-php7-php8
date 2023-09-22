<?php

$iterator = new ArrayIterator([1, 2, 3]);

function sumIterator(iterable $iterator): void
{
    foreach ($iterator as &$value) {
        $value += 1;
    }
}

sumIterator($iterator);

var_dump($iterator);