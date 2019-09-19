<?php

//$url_id = "jump_id=7%401";
//$de_id = urldecode($url_id);
//
//$url_id = "ab!3%234%245%256%5e7%268*9(0)1%3a2%223%3c4%3e5%3f6%2f7%5c8%7c9%2c1.00+0%60a%7eb-c_d%3de%2bf%27g%3b";
//echo "$de_id";
//
//$d_id = urldecode($url_id);
//echo "$d_id";

//$furits = ['a' => "apple", 'b' => 'banana', 'c' => 'cherry', 'd' => 'pear'];
//
//function print_name($item, $key) {
//
//    printf($key .':'.$item."\n");
//}
//
//array_walk($furits, 'print_name');
//var_dump($furits);
//
//$vegetable = ["Carrot", "Cucumber", "Onion", "Potato", "Celry"];
//
//echo "After .....";
////array_walk($vegetable, "print_name");
///
///
///
//
//namespace src\object\OBC\basic;
//
//define("MY_CONSTATN", "com.zrb.my.constant");
//
//echo  MY_CONSTATN."\n";
//
//const  MY_CONST = ["day", "week", "month"];
//
//echo  MY_CONST[0]."\n";
//
//const ANOTHER_CONST = MY_CONST;
//echo  ANOTHER_CONST;
//echo My_conSTant;
//
//echo __LINE__."\n";
//
//echo __LINE__."\n";
//echo __LINE__."\n";
//echo __LINE__."\n";echo __LINE__."\n";
//
//
//CONST MY_CONT = "my.contstant";
//
//class  MyClass {
//    function hello() {
//        printf(__CLASS__.namespace\MY_CONT."\n");
//    }
//}
//
//$obj = new MyClass();
//$obj->hello();
//
//echo "namespace using\n";
//
//$obj = new MyClass();
//$obj -> hello();

//if (print("1\n") && print("2\n") && print("3\n") && print("4\n")) {
//    ;
//}

// Memory
//class  Foo {
//    public  $var = "3.14159265359";
//}
//
//$memory_usage = memory_get_usage();
//
//echo  "current memory $memory_usage";
//
//for ($i = 0; $i < 100000; $i++) {
//    $a = new  Foo();
//    $a->self = $a;
//
//    if ($i % 500 == 0) {
//        echo sprintf('%8d: ', $i), memory_get_usage() - $baseMemory, "\n";
//    }
//}

$temp_array[] = [
    'a' => 'abc',
];

var_dump($temp_array);

$temp_array[] = [
    'b' => 'bc',
];

$temp_array[] = [
    'c' => 'cc'
];

var_dump($temp_array);

$type_data[] = array(
//    'name' => array(self::textArea(array('text' => '关于我们', 'color' => self::FONT_COLOUR_BLACK, 'size' => self::FONT_SIZE_H4, 'bold' => '0')),),
//    'desc' => array(self::textArea(array('text' => '', 'color' => self::FONT_COLOUR_BLACK, 'size' => self::FONT_SIZE_H4, 'bold' => '0')),),
    'jump_url' => 'https://h5builder.kejidaikuan.com/normal/h5page?page_id=d7db8956272bd266ec1fffc34fbb4f89',
    'jump_id' => '',
);
$type_data[] = array(
//    'name' => array(self::textArea(array('text' => '设置', 'color' => self::FONT_COLOUR_BLACK, 'size' => self::FONT_SIZE_H4, 'bold' => '0')),),
//    'desc' => array(self::textArea(array('text' => '', 'color' => self::FONT_COLOUR_BLACK, 'size' => self::FONT_SIZE_H4, 'bold' => '0')),),
//    'jump_url' => empty($param['user_id']) ? ConstNativeUri::appScheme('NATIVE_URI_LOGIN') : ConstNativeUri::appScheme('NATIVE_URI_SET'),
    'jump_id' => '',
);

var_dump($type_data);

$t_d = "abc";
foreach ($type_data as $data) {

    $tem_d = $data['jump_id'] . "join ++";
    $t_d = $t_d . "end==" . $tem_d;
    echo  "$tem_d \n";
}

echo "End scope var tem_d $tem_d\n  t_d $t_d";


$info[] = array(
    'type'            => '4',
    'beforeAdjustAmt' => '3000',
    'afterAdjustAmt'  => '5000',
);
//$info[] = array(
//    'type' => '5',
//    'af'   => '300',
//);

$result = array(
    'loanNo' => '123455',
    'type'   => 'dai',
    'list'   => $info,
);

var_dump($result);