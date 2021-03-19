<?php
/*
* PHP 命名空间可以解决以下两类问题：
*1)用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
*2)为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性。
*/

//1.定义命名空间
//1)默认情况下，所有常量、类和函数名都放在全局空间下，就和PHP支持命名空间之前一样。
//命名空间通过关键字namespace 来声明。如果一个文件中包含命名空间，它必须在其它所有代码之前声明命名空间。语法格式如下

//定义代码在 'MyProject'命名空间中:定义命名空间格式如下
namespace Myproject;

//同一文件定义不同命名空间,例如下例中的Mproject1 和 Anotherproject
namespace Mproject1;
const CONNECT_OK = 1;
class connection{}
function connect(){}

namespace Anotherproject;
const CONNECT_OK = 1;
class  connection{}
function connect(){}

?>