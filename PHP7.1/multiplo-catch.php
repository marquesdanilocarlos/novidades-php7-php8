<?php

class MyException1 extends Exception {}
class MyException2 extends Exception {}
class MyException3 extends Exception {}

try {
    //throw new MyException1("Deu pau1");
    throw new MyException1("Deu pau2");
    //throw new MyException1("Deu pau3");

} catch (MyException1 | MyException2 | MyException3 $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    die ("Deu pau, porra!");
}