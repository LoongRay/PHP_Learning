<?php
//单个文件中定义多个命名空间。建议使用下面的大括号形式的语法。
namespace Myproject1{
    const CONNECT_OK = 1;
    class Connection{}
    function connect(){}
}


namespace Anotherproject1{
    const CONNECT_OK = 1;
    class Connection{}
    function connect(){}
}

//将全局的非命名空间中的代码与命名空间中的代码组合在一起，只能使用大括号形式的语法
//全局代码必须用一个不带名称的 namespace 语句加上大括号括起来，例如：

namespace Myproject2{//命名空间代码定义
    const CONNECT_OK = 1;
    class Connection{}
    function connect(){}
}

namespace {//全局代码定义(非命名空间)
    session_start();
    $a = Myproject\connect();
    echo Myproject\Connection::start();
}

/*
*<html>
*<?php
*namespace MyProject; // 命名空间前出现了“<html>” 会致命错误 -　命名空间必须是程序脚本的第一条语句
*?>
*/

?>