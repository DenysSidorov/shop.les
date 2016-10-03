<?php
class A {

    public function __construct()
    {

    }
}



require A::class;
 $a = new A();
if (!empty($_SERVER['REQUEST_URI'])) {


    print_r( $_SERVER['REQUEST_URI']."\n");
    print_r( trim($_SERVER['REQUEST_URI'], '/'));
}