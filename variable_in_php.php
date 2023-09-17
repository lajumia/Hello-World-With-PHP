 <?php
/*clear concept of variable declaration rules and classification 

variable declaration rules:

1.start with dollar sign($)
2.first letter of variable name comes from a-zA-z_
3.next letters of variable name comes from a-zA-Z0-9_
4.no space,no syntex

classification of variables:

Variable are mainly Two types
1.Predefined Variable
2.User Define Variable

Predefined Variable
There are 12 predefined variables in php 8
1.$GLOBALS
2.$_SERVER
3.$_REQUEST
4.$_FILES
5.$_ENV
6.$_SESSION
7.$_COOKIE
8.$_GET
9.$_POST
10.$http_response_header
11.$argc
12.$argv

User Define Variable
User Define variable are 3 types
1.variable scope
2.variable variables
3.reference variable

Variable Scope
variable scope are 3 types
1.local scope
2.global scope
3.static variable*/

$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
echo $b;

function globalVar(){
    global $num2;
    $num2 = 234;
    echo $num2;

}
globalVar();//output 234 and can print from everywhere

function local(){
    $num = 23;
    echo $num;

}
local();//output 23 local variable use case

//static variable usecase.
function test()
{
   static $a = 0;
    echo $a;
    $a++;
}

test();//output o
test();
?>