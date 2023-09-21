<?php

$anonimClass = new class("Caralho") {
    public string $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function hello() {
        echo "Hello World, {$this->name}";
    }
};

$anonimClass->hello();