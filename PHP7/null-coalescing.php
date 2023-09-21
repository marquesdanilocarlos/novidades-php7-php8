<?php

/*if (isset($_GET['q'])) {
    $query = $_GET['q'];
} else {
    $query = null;
}*/

//$query = (!empty($_GET['q'])) ? $_GET['q'] : null;

$busca = null;

$query = $_GET['q'] ?? $busca ?? "valor default";

echo "Sua busca é {$query}";
