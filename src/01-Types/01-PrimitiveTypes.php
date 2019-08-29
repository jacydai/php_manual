// 0. bool (boolean)
<?php
    // 1. bool boolean
    $foo = ture;
    $bar = false;

    if($foo == $bar) {
        echo "foo equal to bar!\n";
    }
    else {
        echo var_dump((bool)foo);
    }

    // 2. Convert a value to bool
    $str = "abc";
    $num = 10;
    
    $foo = (bool)$num;
    $bar = (boolean)$str;
    
    echo "$foo,$bar\n";
    var_dump($foo);
    var_dump($bar);

    $bfoo = $num;
    var_dump($bfoo);
    /**
     * NOTE:
     * When converting to boolean, the following values are considered FALSE:
     * the boolean FALSE itself
     * the integers 0 and -0 (zero)
     * the floats 0.0 and -0.0 (zero)
     * the empty string, and the string "0"
     * an array with zero elements
     * the special type NULL (including unset variables)
     * SimpleXML objects created from empty tags
     * Every other value is considered TRUE (including any resource and NAN). 
     * 
     * Waring:
     * -1 is considered TRUE, like any other non-zero (whether negative or positive) number! 
     */
?>

// 1. Interger
<?php
// 1. Integer
// An integer is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}. 
/*
decimal     : [1-9][0-9]*
            | 0

hexadecimal : 0[xX][0-9a-fA-F]+

octal       : 0[0-7]+

binary      : 0[bB][01]+

integer     : decimal
            | hexadecimal
            | octal
            | binary
*/
$num = 1234; // decimal
$num2 = 0123; //octal
$num3 = 0x13bf; // hexadecimal
$num4 = 0b010101; // binary
$num5 = 0b01110; // 0b03b Parse error: syntax error, unexpected '3' (T_LNUMBER)

var_dump($num);
var_dump($num2);
var_dump($num3);
var_dump($num4);
var_dump($num5);

var_dump(PHP_INT_SIZE);
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

// 2. Integer overflow
$larg_int = PHP_INT_MAX;
$small_int = PHP_INT_MIN;

var_dump($larg_int * 10000);
var_dump($small_int * 100);
var_dump(intval($larg_int / 0));

// 3. Convert a value to integer
// FALSE will yield 0 (zero), and TRUE will yield 1 (one). 
// NULL is always converted to zero (0). 
$null_num = (integer)($abc);
var_dump($null_num);
var_dump($abc);
var_dump((integer)(false));
var_dump((integer)(true));
var_dump((integer)33.00);
?>

// 2. Float 
<?php 

// 1. Float Numbers
// Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the following syntaxes: 
/**
 *  Formally:
 * LNUM          [0-9]+
 * DNUM          ([0-9]*[\.]{LNUM}) | ({LNUM}[\.][0-9]*)
 * EXPONENT_DNUM [+-]?(({LNUM} | {DNUM}) [eE][+-]? {LNUM})
 * 
 */
$f_num = 123.0332;
$f_num2 = 1.2e3;
$f_num3 = 7e-5; // 7E-5
var_dump($f_num);
var_dump($f_num2);
var_dump($f_num3);

// 2. Compare
$f1 = 1.3232223423423;
$f2 = 1.3232223423;
$cmp = $f1 == $f2;
$eplision = 0.00000001;
$cmp_r = abs($f1 - $f2) < $eplision;
var_dump($cmp);
var_dump($cmp_r);

// 3. NAN
$r_nan = is_nan(NAN);
var_dump($r_nan);
?>