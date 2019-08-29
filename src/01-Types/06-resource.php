<?php
// 1. Resouce
// A resource is a special variable, holding a reference to an external resource. Resources are created and used by special function


// 2. NULL
/**
 * A variable is considered to be null if:
 * it has been assigned the constant NULL.
 * it has not been set to any value yet.
 * it has been unset().
 */
// There is only one value of type null, and that is the case-insensitive constant NULL.
$null = null;
var_dump($null);

// 3. Callbacks/callables

function user_callback_fun() {
    
    $signature = __FUNCTION__;
    echo "Hello,world! {$signature}".PHP_EOL;
}

class MyClass {
    
    static function myCallbackFunc() {
        
        $sig = __FUNCTION__;
        echo "Hello, $sig".PHP_EOL;
    }
}

'user_callback_fun'(); // invoke func 

// 1. Simple callback
call_user_func('user_callback_fun'); 

// 2. static class method call
call_user_func(array('MyClass','myCallbackFunc'));

// 3. Object method call
$obj = new MyClass();
call_user_func(array($obj,myCallbackFunc));

// 4. static class call
call_user_func('MyClass::myCallbackFunc');

// 5.Releative static method call

class A {
    public static function doSome() {
        
        echo "AAA\n$self";
    }
}

class B extends A {
    public static function doSome() {
        
        echo "BBB\n";
    }
}

call_user_func(array('B','doSome'));
call_user_func(array('B','parent::doSome'));

// 6. Objects implementing __invoke can be used as callables (since PHP 5.3)

class C {
    public function __invoke($name) {
        
        echo "Hello, $name\\\\\\\\\\\\\n";
    }
}

$obj = new C();
call_user_func($obj,'PHPer');


// 8. Callable example using a Closure

$blk = function($bl) {
    
    echo "\n\n ===$bl==\n\n";
    return $bl * 3;
};

$nums  = range(1, 10);

$n_nums = array_map($blk,$nums);
var_dump($n_nums);
print implode('++',$n_nums);

$callable = 'user_callback_fun'();

$range = range(1, 5);
$n_nums = array_map($callable, $range);
var_dump($n_nums);


// 9. Type Juggling
$var = "1";
var_dump($var);
$var = 1;

var_dump($var);

$var = 10 * "5 pigs";
var_dump($var);

$var = 10.2 * "5 pigs";
var_dump($var);