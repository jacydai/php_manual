<?php
// 1. Create a array
// array  array()
/**
 * array(  key => value,
 *         key2 => value,
 * )
 */
$arr = array(1 => 'Tom',2 => 'Jerry', 3 => "Hank");
// var_dump($arr);

// Php 5.4 latter 
$arr2 = [
    1 => 'Adam',
    2 => 'Zebar',
    3 => 'Bob',
];
// var_dump($arr2);

// 2. Modify array  Append item
$arr[3] = "Bill";
$arr[] = "Jelly";

$arr2[3] = "Tim";
$arr2[]  = "Zhonghua";

// var_dump($arr);
// var_dump($arr2);

// 3. Complex array
$keyedArray = [
    "Apple",
    "Orange",
    "Blueberry",
    9 => "Cherry",
    "watermelon",
    'veg' => "Cabbage",
    'Onion',
    'per' => $arr2,
    'name' => [
        'first_name' => [
            'Bill', 'Zend', 'Heyd',
        ],
    ]
];
// var_dump($keyedArray);

// access Array element
// var_dump($keyedArray[name][first_name]);

function getArray() {
    
    return [1,2,3,4,5];
}

$secEle = getArray()[2];
var_dump($secEle);

// 4. Remove item
unset($keyedArray[name]);

var_dump($keyedArray);

// remove all array ,the result is null
unset($arr);
var_dump($arr);

// foreach
$forArr = [1, 2, 3, 4, 5, 9 => 'Zhong', 'name' => 'Xuanwu'];
print_r('initArray'.$forArr);
foreach ($forArr as $i => $value) {
    print_r($value.PHP_EOL);
    unset($forArr[$i]);
}
print_r(PHP_EOL.$forArr.'delete each item'.PHP_EOL);

// Append item 
$forArr[] = '朱雀🐷';
print_r($forArr);

// 6. re-index array
$forArr = array_values($forArr);
$forArr[] = "玄武";
print_r($forArr);

// 7. Coverting to array
$basicNum  = 18;
$basicStr  = 'String';

// print_r('basicnum'.(array)$basicNum,'basicStr'.(array)$basicStr);
var_dump((array)$basicNum);
var_dump((array)$basicStr);

class person {
    public $name;
    private $age;
    protected $address;
    
}

class male extends person {
    private $gender = 'male';
    protected $salary = '￥50000.00';
}

/**
 * Object covert to array
 * If an object is converted to an array, the result is an array whose elements are the object's properties.
 *  The keys are the member variable names, with a few notable exceptions: integer properties are unaccessible;
 *  private variables have the class name prepended to the variable name;
 *  protected variables have a '*' prepended to the variable name.
 *  These prepended values have null bytes on either side. 
 * This can result in some unexpected behaviour: 
 */
$man = new male();
// $man->gender = 'male';
// $man->salary = '50000';
$man ->name = 'Billy';
$man -> age = 22;
// $man -> address = 'California';
var_dump((array)$man);