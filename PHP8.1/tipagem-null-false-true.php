<?php

function teste(): false //Não pode false|true
{
    //return true;
    return false;
}

function teste2(): true //Não pode false|true
{
    //return false;
    return true;
}

function teste3(): null
{
    return null;
    //return true;
}


function soma(int $a, int $b): null|false|int
{
    if ($a === 0 && $b === 0) {
        return null;
    }

    if ($a === 0 || $b === 0) {
        return false;
    }

    return $a+$b;
}

//teste();
//teste2();
//teste3();

var_dump(soma(10,0));