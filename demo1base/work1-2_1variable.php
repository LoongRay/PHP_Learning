<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2021-03-15
 * Time: 17:12
 */

/*
 * 变量以 $ 符号开始，后面跟着变量的名称
* 变量名必须以字母或者下划线字符开始
* 变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
* 变量名不能包含空格
* 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
 */

$x =5;
$y = 6;
$z = $x + $y;
echo $z;

/*PHP 是一门弱类型语言
*在上面的实例中，我们注意到，不必向 PHP 声明该变量的数据类型。
*PHP 会根据变量的值，自动把变量转换为正确的数据类型。
*在强类型的编程语言中，我们必须在使用变量前先声明（定义）变量的类型和名称。
*/

$txt = "字符串内容!";
print $txt;
?>