
// 3. Strings
<?php

// 1.  A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.
/**
 *  A string literal can be specified in four different ways:
 *  single quoted
 *  double quoted
 *  heredoc syntax
 *  nowdoc syntax (since PHP 5.3.0)
 * 
 */

 // 2. Single quoted

 $str = 'I am a string, I need backslash specify a special character, such as quoted,double quoted,newlin: \',",\\n \\\n';

 echo "$str";
 // 3. Double quoted

 $d_str = "String value is ASSIC character\n,when we using a string need to format to \"Unicode\" string \t";
//  echo '$d_str'; // echo $d_str
echo "$d_str"; 

 // 4. Heredoc syntax
 $h_str = <<<"EEET"
 Hello,EBT;
 Hello,BBB;
EEET;
 echo "$h_str";  
// Notes: end identifier can't contain any other symbols, such as space,tab,

/**
 * Warning:
 *  It is very important to note that the line with the closing identifier must contain no other characters, except a semicolon (;). 
 * That means especially that the identifier may not be indented, and there may not be any spaces or tabs before or after the semicolon.
 *  It's also important to realize that the first character before the closing identifier must be a newline as defined by the local operating system. 
 * This is \n on UNIX systems, including macOS. The closing delimiter must also be followed by a newline.
 * If this rule is broken and the closing identifier is not "clean", it will not be considered a closing identifier, and PHP will continue looking for one.
 *  If a proper closing identifier is not found before the end of the current file, a parse error will result at the last line. 
 */

$hh_str = <<<"EET"
Hello World!\n
// I love three things in this world. \n
// Sun, moon and you. \n
// Sun for morning, moon for night , and you forever .\n
EET;
 
 echo "$hh_str";


 // Error: Parse error: syntax error, unexpected '<<' (T_SL) in /Users/zrb_dxs/iCode/Backend/php_handbook/src/02-PrimitiveTypes.php on line 27
 // 5. nowdoc syntax

 $n_str = <<<'EE'
Nowdoc,hello.
EE;
 
echo <<<'EEET'
Nowdoc,hell;\n
BBT;
cc

EEET;


// 5.  Nowdoc string quoting example with variables
class person {
    var $name;
    var $age;
    function __costruct() {
        $this->name = "JELLY";
        $this->age = 18;
    }
}

$pp = new person();
// $pp->name = "Belly";
// $pp->age = 30;

echo "person $pp->name age $pp->age \n";

class foo {
    public $foo;
    public $bar;
   
    function __costruct() {
        $this->foo = "foo";
        $this->bar = array("adult","teenager","student");
    }
}

$fo = new foo();
echo "foo $fo->foo, bar[1] {$fo->bar[1]}.";
