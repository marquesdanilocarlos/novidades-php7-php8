<?php

$obj = new stdClass();
$map = new WeakMap();

$map[$obj] = 'Na chave do objeto';

var_dump($map);