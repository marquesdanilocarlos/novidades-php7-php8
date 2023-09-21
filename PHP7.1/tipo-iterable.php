<?php

function iterar(iterable $nums) {
    foreach ($nums as $num) {
        echo $num;
    }
}

//$nums = [1,2,3,4,5];
$queue = new SplQueue();
$queue->push(1);
$queue->push(2);
$queue->push(3);

iterar($queue);