<?php


function size(int $start, ?int $end): ?int {
    $end = $end ?? "...";
    echo "Início {$start} e fim {$end}";

    return $start ?: null;
}

$result = size(0, null);

echo $result;