<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-15
 * Time: 18:14
 */

echo "<h2>3.Static 作用域</h2>";//切记:语句一定要以分号";"结束
//    3.Static 作用域
/*
 *当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。
 *要做到这一点，请在您第一次声明变量时使用 static 关键字：
 */

function myTest(){
    static $x = 0;
    echo $x;
    $x++;

    echo PHP_EOL; //换行符
}
myTest();//打印0
myTest();//打印1
myTest();//打印2
myTest();//打印3

echo "<h2>4.参数作用域</h2>";
//4.参数作用域
//参数是通过调用代码将值传递给函数的局部变量。
//参数是在参数列表中声明的，作为函数声明的一部分：
function myTest2($x1){
    echo $x1;
}
myTest2(5);

?>


