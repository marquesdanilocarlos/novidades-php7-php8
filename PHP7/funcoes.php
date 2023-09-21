<?php

echo 11.11/2;
//Retorna o valor da divisão como inteiro
echo intdiv(11.4,2);

echo "<hr/>";
//Limpa o último erro exibido
error_clear_last();
var_dump(error_get_last());

echo "<hr/>";
//Substituição de strings usando um array de expressões regulares
$regexArr = [
    "/a/i" => function() {
    return "-";
    },
    "/b/i" => function() {
        return "-";
    },
    "/[cd]/i" => function($match) {
        return " -" . $match[0] . "- ";
    }
];

$string = "aAa bbbB CccC Ddd";
echo preg_replace_callback_array($regexArr, $string);

echo "<hr/>";

echo random_bytes(5);
echo "<br/>";
echo random_int(1,999);

