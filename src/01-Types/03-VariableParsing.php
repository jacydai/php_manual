<?php

// Variable Parsing
// 1. Simple Syntax
/**
 * If a dollar sign ($) is encountered, the parser will greedily take as many tokens as possible to form a valid variable name.
 *  Enclose the variable name in curly braces to explicitly specify the end of the name. 
 */

 $juice = "Apple";
 
 echo "He drank some $juice ".PHP_EOL;
 echo "He drank some made of $juices".PHP_EOL;
 echo "He drank some juice made of {$juice}s.".PHP_EOL;

 
$juices = ["Apples","Banans","Oranges","note" => "One"];

echo "\n\nHe drank some $juices[0] ".PHP_EOL;

echo "He drank some made of $juices".PHP_EOL;
echo "He drank some juice made of {$juices[note]}s.".PHP_EOL;

class person {
    public $jhon = "Jhon Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$people = new person();

echo "$people->jhon drank some $juice juice. $people->jane, $people->robert, $people->smith";

// Negative numeric indices
$strs = "Hello,world!";
echo "Strings[-3] $strs[-3],Strings:(-0)$strs[-0] ,strs[0] $strs[0]\n";