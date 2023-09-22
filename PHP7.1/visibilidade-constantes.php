<?php

class Book
{
    private const CODE = "0xFFF";

    public static function getCode(): string
    {
        return self::CODE;
    }
}

var_dump(Book::getCode());