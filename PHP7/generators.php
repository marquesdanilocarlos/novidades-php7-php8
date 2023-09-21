<?php

echo memory_get_usage();
echo "<hr/>";

//$range = range(1, 10000);

$range = function() {
  for ($i = 1; $i <= 10000; $i++) {
      yield $i;
  }
};


foreach ($range() as $value) {
    echo $value . " ";
}
echo "<hr/>";

echo memory_get_usage();
echo "<hr/>";