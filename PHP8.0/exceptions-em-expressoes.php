<?php


try {
    $_GET["param"] ?? throw new Exception("Deu pau!");
} catch (Exception) {
    echo "Ocorreu um erro!";
}