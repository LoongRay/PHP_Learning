<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-15
 * Time: 22:21
 */
//1.字符串
$str1 = "hello world";
echo $str1;
echo "<br/>";
$str2 = 'hello world';
echo $str2;

/*
*整数是一个没有小数的数字。
*
*整数规则:
*
*整数必须至少有一个数字 (0-9)
*整数不能包含逗号或空格
*整数是没有小数点的
*整数可以是正数或负数
*整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。
* var_dump() 函数返回变量的数据类型和值：
*/

//2.整型
echo "<br/>";
$x = 5895;//整数
var_dump($x);
echo "<br/>";
$y = -111;//负数
var_dump($y);
echo "<br/>";
$y = -0x8c;//十六进制
var_dump($y);
echo "<br/>";
$y = 047;//八进制
var_dump($y);
echo "<br/>";

//3.浮点型
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<br/>";

//4.布尔型
$x=true;
var_dump($x);
echo "<br/>";
$y=false;
var_dump($y);
echo "<br/>";

//5.数组
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);//返回索引和数组元素的长度,格式如下: [索引] =>string(长度)
echo "<br/>";

//6.对象:创建对象的代码需要反复看
class Car
{
    var $color;
    function __construct($color = "green")
    {
        $this->color = $color;
    }
    function what_color($obj){
        foreach (get_object_vars($obj) as $prop => $val){
            echo "\t$prop = $val\n";
        }
    }
}

//打印属性的函数
function print_vars($obj){
    foreach (get_object_vars($obj) as $prop => $val){
        echo "\t$prop = $val\n";
    }
}

//实例1个对象
$herible = new Car("white");

//显示$herible的属性
echo "\therible Properties\n";
print_vars($herible);

//7.null值
echo "<br/>";
$x = "hello";
var_dump($x);
echo "<br/>";
$x = null;
var_dump($x);

?>






