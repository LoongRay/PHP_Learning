<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-15
 * Time: 17:22
 */

echo "<h2>1.局部和全局作用域</h2>";
//1局部和全局作用域
/*
* 变量的作用域是脚本中变量可被引用/使用的部分。
*PHP 有四种不同的变量作用域：
*local
*global
*static
*parameter
*/

//全局变量
$x = 5;

//因为 $x 变量在函数外定义，无法在函数内使用，如果要在一个函数中访问一个全局变量，需要使用 global 关键字。
function myTest(){
    $y = 10;//局部变量
    echo "<p>测试函数内变量:</p>";
    //echo "变量x为:$x";//由于$x为全局变量,所以此处会报错
    echo "<br>";
    echo "变量y为:$y";
}

myTest();

//函数将会输出全局变量 $x 的值，但是不能输出 $y 的值，因为 $y 变量在函数中定义，属于局部变量。
echo "<P>测试函数外变量:</P>";
echo "变量x为: $x";
echo "<br>";
//echo "变量y为: $y";

echo "<hr/>";
echo "<h2>2.PHP global 关键字</h2>";
//2.PHP global 关键字

//global 关键字用于函数内访问全局变量。
//在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字
$x1=2;
$y1=5;

function myTest2(){
    global $x1,$y1;
    $y1 = $x1 + $y1;
}

myTest2();
echo "$y1";
echo "<br>";

//PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。
//这个数组可以在函数内部访问，也可以直接用来更新全局变量。
$x2 = 10;
$y2 = 5;

function myTest3(){
    $GLOBALS['y2'] = $GLOBALS['x2'] + $GLOBALS['y2'];
}
myTest3();
echo "$y2";
?>