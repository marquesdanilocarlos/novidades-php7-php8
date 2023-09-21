<?php

class MyAssertError extends AssertionError {
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

try {
    assert(4 == 3, new MyAssertError("4 é diferente de 3"));
} catch (MyAssertError $e) {
    echo $e->getMessage();
}