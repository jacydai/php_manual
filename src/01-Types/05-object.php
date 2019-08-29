
<?php

// 1. Initialize object
// To create a new object, use the new statement to instantiate a class:
class foo {
    var $bar = "bar";
    
    function doSomething() {

        // print($bar);
        echo 'do somthing'.$bar.PHP_EOL;
    }
}

$foo = new foo();
$foo -> bar = 'bar_bar';
$foo -> doSomething();
var_dump($foo);

// 2. Covert to object

$sclarNum = 100;
var_dump((object)$sclarNum);

var_dump((object)'Mechial Jackson');

var_dump((object)$foo);
