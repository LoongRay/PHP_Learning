<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-15
 * Time: 18:48
 */

echo "<h2>1.PHP echo 语句</h2>";
//1.PHP echo 语句
//echo 是一个语言结构，使用的时候可以不用加括号，也可以加上括号： echo 或 echo()。

//1)显示字符串
echo "<p>很有趣很有趣</p>";
echo "我是","Loong,","我现在25!";
echo "<br/>";

//2)显示变量
$txt1 = "学习 PHP";
$txt2 = "Runoob.com";
$arr1 = array("Volvo","BWM","Toyota");

echo $txt1;
echo "<br/>";
echo "我在{$txt2}学习PHP";
echo "<br/>";
echo "我有一辆{$arr1[2]}";
echo "<hr/>";

echo "<h2>2.PHP print 语句</h2>";
//2.print 语句
//1)显示字符串
//print 同样是一个语言结构，可以使用括号，也可以不使用括号： print 或 print()。
print "<P>php很有趣!</P>";
print "hello<br/>";
print "我要学习php<br/>";

//2)显示变量
//下面的实例演示了如何使用 print 命令输出变量和字符串：
$str1 = "学习php";
$str2 = "Runoob.com";
$arr2 = array("volvo","benz","Toyota");

print "$str1";
print "<br/>";
print "我在 $str2 学习php";
print "<br/>";
print "我有1辆{$arr2[1]}";

//print "我是,","Loong";//print只允许输出一个字符串

//区别
/*
*echo 和 print 区别:
*echo - 可以输出一个或多个字符串
*print - 只允许输出一个字符串，返回值总为 1
*提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。
*/

?>