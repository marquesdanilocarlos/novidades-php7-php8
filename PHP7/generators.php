<?php

echo memory_get_usage();
echo "<hr/>";

//$range = range(1, 10000);

$range = function() {
    $sum = 0;
  for ($i = 1; $i <= 1000; $i++) {
      yield $i;
      $sum += $i;
  }

  return $sum;
};

$newRange = function() {
    yield 1001;
    yield 1002;
    yield 1003;
    yield from [1004, 1005, 1006];
};

$rangeResult = function() use ($range, $newRange) {
    yield from $range();
    yield from $newRange();
};

foreach ($rangeResult() as $value) {
    echo $value . " ";
}

//var_dump($rangeResult()->getReturn());
echo "<hr/>";

echo memory_get_usage();
echo "<hr/>";