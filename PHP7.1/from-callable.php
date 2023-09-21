<?php

class Customer
{
    protected function print()
    {
        echo "Exibe o cliente";
    }

    public function getMethod(string $method)
    {
       return Closure::fromCallable([$this, $method]);
    }
}

$myClient = new Customer();
$print = $myClient->getMethod('print');

var_dump($print);
