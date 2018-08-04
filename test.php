<?php

interface MyInterface{
    public function foo();
    public function bar();
}

abstract class MyAbstract implements MyInterface{
    public function foo(){ echo 'some commone';}
abstract public function bar();
}

// what i usually see
class MyClass extends MyAbstract{
    // public function bar() {
    //     echo 'I am learning';
    // }
}




$new = new MyClass();

$new->foo();
$new->bar();