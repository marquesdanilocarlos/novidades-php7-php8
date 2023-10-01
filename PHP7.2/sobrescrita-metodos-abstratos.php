<?php

abstract class Foo
{
    abstract function test(string $s);
}
abstract class Bar extends Foo
{
    // overridden - still maintaining contravariance for parameters and covariance for return
    abstract function test($s) : int;
}