<?php
/**
 * 选择数据库
 */
    $dbhost = 'localhost';//定义变量保存数据库主机地址
    $dbuser = 'root';//定义变量保存数据库用户名
    $dbpass = 'root';//定义变量保存数据库密码
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass);//创建数据库连接实例

    if (!$conn){//数据库连接失败处理
        die('Could not connect' . mysqli_error($conn));
    }

    echo '数据连接成功!';

    $sql = "CREATE DATABASE RUNOOB";//定义变量保存数据库查询语句,该语句用于创建RUNOOB的数据库
    $retval = mysqli_query($conn,$sql);//通过数据库连接执行数据库查询语句
    if(!$retval){//判断执行数据库查询语句是否失败,失败则显示提示语
        die('数据库创建失败' . mysqli_error($conn));
    }
    echo "<br/>";
    echo "数据库Runoob创建成功!\n";

    mysqli_select_db($conn, "RUNOOB");//通过数据库连接执行数据库选择语句,选择RUNOOB数据库
    mysqli_close($conn);//断开数据库连接

?>